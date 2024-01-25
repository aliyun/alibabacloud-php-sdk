<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmListRequest extends Model
{
    /**
     * @var int
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $expandInformation;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'algorithmType'     => 'AlgorithmType',
        'expandInformation' => 'ExpandInformation',
        'instanceId'        => 'InstanceId',
        'metricName'        => 'MetricName',
        'operaUid'          => 'OperaUid',
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->expandInformation) {
            $res['ExpandInformation'] = $this->expandInformation;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
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
     * @return GetAlgorithmListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['ExpandInformation'])) {
            $model->expandInformation = $map['ExpandInformation'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
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
