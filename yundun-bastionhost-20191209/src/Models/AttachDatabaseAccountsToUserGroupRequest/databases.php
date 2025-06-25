<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachDatabaseAccountsToUserGroupRequest;

use AlibabaCloud\Dara\Model;

class databases extends Model
{
    /**
     * @var string[]
     */
    public $databaseAccountIds;

    /**
     * @var string
     */
    public $databaseId;
    protected $_name = [
        'databaseAccountIds' => 'DatabaseAccountIds',
        'databaseId' => 'DatabaseId',
    ];

    public function validate()
    {
        if (\is_array($this->databaseAccountIds)) {
            Model::validateArray($this->databaseAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseAccountIds) {
            if (\is_array($this->databaseAccountIds)) {
                $res['DatabaseAccountIds'] = [];
                $n1 = 0;
                foreach ($this->databaseAccountIds as $item1) {
                    $res['DatabaseAccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseAccountIds'])) {
            if (!empty($map['DatabaseAccountIds'])) {
                $model->databaseAccountIds = [];
                $n1 = 0;
                foreach ($map['DatabaseAccountIds'] as $item1) {
                    $model->databaseAccountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        return $model;
    }
}
