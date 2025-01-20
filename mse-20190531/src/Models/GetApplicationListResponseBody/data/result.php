<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationListResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $extraInfo;
    /**
     * @var int
     */
    public $instancesNumber;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'extraInfo'       => 'ExtraInfo',
        'instancesNumber' => 'InstancesNumber',
        'language'        => 'Language',
        'namespace'       => 'Namespace',
        'regionId'        => 'RegionId',
        'source'          => 'Source',
        'status'          => 'Status',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->instancesNumber) {
            $res['InstancesNumber'] = $this->instancesNumber;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['InstancesNumber'])) {
            $model->instancesNumber = $map['InstancesNumber'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
