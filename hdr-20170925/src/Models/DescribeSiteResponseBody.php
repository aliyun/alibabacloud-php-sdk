<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @example SH
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example B30A844D-E4CF-5382-A0D4-3DE76A8AD2AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example si-000bzkmmlwh01trrecuw
     *
     * @var string
     */
    public $siteId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example cloud
     *
     * @var string
     */
    public $type;

    /**
     * @example sg-bp1466glrmpqfsq4zpjs
     *
     * @var string
     */
    public $userSecurityGroupId;

    /**
     * @example vpc-bp1c3byhnaoj3u96sgk12
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-shanghai-l
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'code'                => 'Code',
        'message'             => 'Message',
        'name'                => 'Name',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'siteId'              => 'SiteId',
        'success'             => 'Success',
        'type'                => 'Type',
        'userSecurityGroupId' => 'UserSecurityGroupId',
        'vpcId'               => 'VpcId',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userSecurityGroupId) {
            $res['UserSecurityGroupId'] = $this->userSecurityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserSecurityGroupId'])) {
            $model->userSecurityGroupId = $map['UserSecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
