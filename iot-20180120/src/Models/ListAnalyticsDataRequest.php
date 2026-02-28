<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListAnalyticsDataRequest\condition;

class ListAnalyticsDataRequest extends Model
{
    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var condition[]
     */
    public $condition;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $isoId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'apiPath' => 'ApiPath',
        'condition' => 'Condition',
        'iotInstanceId' => 'IotInstanceId',
        'isoId' => 'IsoId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->condition)) {
            Model::validateArray($this->condition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }

        if (null !== $this->condition) {
            if (\is_array($this->condition)) {
                $res['Condition'] = [];
                $n1 = 0;
                foreach ($this->condition as $item1) {
                    $res['Condition'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->isoId) {
            $res['IsoId'] = $this->isoId;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }

        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n1 = 0;
                foreach ($map['Condition'] as $item1) {
                    $model->condition[$n1] = condition::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['IsoId'])) {
            $model->isoId = $map['IsoId'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
