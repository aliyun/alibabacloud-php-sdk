<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class DeleteNetworkPathRequest extends Model
{
    /**
     * @var string[]
     */
    public $networkPathIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkPathIds' => 'NetworkPathIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->networkPathIds)) {
            Model::validateArray($this->networkPathIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkPathIds) {
            if (\is_array($this->networkPathIds)) {
                $res['NetworkPathIds'] = [];
                $n1 = 0;
                foreach ($this->networkPathIds as $item1) {
                    $res['NetworkPathIds'][$n1++] = $item1;
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
        if (isset($map['NetworkPathIds'])) {
            if (!empty($map['NetworkPathIds'])) {
                $model->networkPathIds = [];
                $n1 = 0;
                foreach ($map['NetworkPathIds'] as $item1) {
                    $model->networkPathIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
