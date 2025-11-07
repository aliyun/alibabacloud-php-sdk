<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class DeleteOpsItemsRequest extends Model
{
    /**
     * @var string[]
     */
    public $opsItemIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'opsItemIds' => 'OpsItemIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->opsItemIds)) {
            Model::validateArray($this->opsItemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opsItemIds) {
            if (\is_array($this->opsItemIds)) {
                $res['OpsItemIds'] = [];
                $n1 = 0;
                foreach ($this->opsItemIds as $item1) {
                    $res['OpsItemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['OpsItemIds'])) {
            if (!empty($map['OpsItemIds'])) {
                $model->opsItemIds = [];
                $n1 = 0;
                foreach ($map['OpsItemIds'] as $item1) {
                    $model->opsItemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
