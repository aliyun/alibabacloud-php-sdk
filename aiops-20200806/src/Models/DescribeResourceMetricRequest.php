<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceMetricRequest extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $firstLoad;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'eventId'     => 'EventId',
        'firstLoad'   => 'FirstLoad',
        'instanceId'  => 'InstanceId',
        'operaUid'    => 'OperaUid',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->firstLoad) {
            $res['FirstLoad'] = $this->firstLoad;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['FirstLoad'])) {
            $model->firstLoad = $map['FirstLoad'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
