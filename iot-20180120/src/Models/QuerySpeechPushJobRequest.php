<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySpeechPushJobRequest extends Model
{
    /**
     * @example iot-060*****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example tBUm***********************QPGT
     *
     * @var string
     */
    public $jobCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0Ykj************************Av0I
     *
     * @var string
     */
    public $projectCode;

    /**
     * @example ALL
     *
     * @var string
     */
    public $pushMode;

    /**
     * @example RUNNING
     *
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobCode'       => 'JobCode',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
        'projectCode'   => 'ProjectCode',
        'pushMode'      => 'PushMode',
        'statusList'    => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobCode) {
            $res['JobCode'] = $this->jobCode;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }
        if (null !== $this->pushMode) {
            $res['PushMode'] = $this->pushMode;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpeechPushJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobCode'])) {
            $model->jobCode = $map['JobCode'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }
        if (isset($map['PushMode'])) {
            $model->pushMode = $map['PushMode'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
