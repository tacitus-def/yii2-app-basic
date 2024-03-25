<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[User]].
 *
 * @see User
 */
class UserQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere(['status' => User::STATUS_ACTIVE]);
    }

    public function available()
    {
        return $this->andWhere(['<>', 'status', User::STATUS_DELETED]);
    }
}
