<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogStoreInfoResponseBody extends Model
{
    /**
     * @description The name of the SLS LogStore in the log service.
     *
     * @example xxx-logstore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The Project name of the log service.
     *
     * @example project-xxx-cn-hangzhou
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Available log storage capacity. Unit: Byte.
     *
     * @example 50000000
     *
     * @var int
     */
    public $quota;

    /**
     * @description The region ID for log delivery.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of this request.
     *
     * @example C6C3B72B********E95FB0A161
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Log storage duration. Unit: days.
     *
     * @example 20
     *
     * @var int
     */
    public $ttl;

    /**
     * @description Used storage capacity. Unit: Byte.
     *
     * > The statistics of the log service have a delay of approximately two hours.
     *
     * @example 0
     *
     * @var int
     */
    public $used;
    protected $_name = [
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'quota' => 'Quota',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'ttl' => 'Ttl',
        'used' => 'Used',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogStoreInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
