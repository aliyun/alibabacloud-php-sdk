<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponseBody\database;

use AlibabaCloud\Dara\Model;

class ownerIdList extends Model
{
    /**
     * @var string[]
     */
    public $ownerIds;
    protected $_name = [
        'ownerIds' => 'OwnerIds',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerIds) {
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1              = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = [];
                $n1              = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
