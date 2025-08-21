<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeStreamResponseBody extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $pushDomain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'app' => 'App',
        'createdTime' => 'CreatedTime',
        'deviceId' => 'DeviceId',
        'enabled' => 'Enabled',
        'groupId' => 'GroupId',
        'height' => 'Height',
        'id' => 'Id',
        'name' => 'Name',
        'playDomain' => 'PlayDomain',
        'protocol' => 'Protocol',
        'pushDomain' => 'PushDomain',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'width' => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->pushDomain) {
            $res['PushDomain'] = $this->pushDomain;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PushDomain'])) {
            $model->pushDomain = $map['PushDomain'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
