<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListAnalyticsDataRequest\condition;
use AlibabaCloud\Tea\Model;

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
        'apiPath'       => 'ApiPath',
        'condition'     => 'Condition',
        'iotInstanceId' => 'IotInstanceId',
        'isoId'         => 'IsoId',
        'pageNum'       => 'PageNum',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('iotInstanceId', $this->iotInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->condition) {
            $res['Condition'] = [];
            if (null !== $this->condition && \is_array($this->condition)) {
                $n = 0;
                foreach ($this->condition as $item) {
                    $res['Condition'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListAnalyticsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n                = 0;
                foreach ($map['Condition'] as $item) {
                    $model->condition[$n++] = null !== $item ? condition::fromMap($item) : $item;
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
