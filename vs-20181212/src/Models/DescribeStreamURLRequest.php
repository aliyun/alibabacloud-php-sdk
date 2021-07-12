<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamURLRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var string
     */
    public $outHostType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $auth;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $transcode;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'id'          => 'Id',
        'type'        => 'Type',
        'outProtocol' => 'OutProtocol',
        'outHostType' => 'OutHostType',
        'location'    => 'Location',
        'auth'        => 'Auth',
        'authKey'     => 'AuthKey',
        'expire'      => 'Expire',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'transcode'   => 'Transcode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->outHostType) {
            $res['OutHostType'] = $this->outHostType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->transcode) {
            $res['Transcode'] = $this->transcode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['OutHostType'])) {
            $model->outHostType = $map['OutHostType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Transcode'])) {
            $model->transcode = $map['Transcode'];
        }

        return $model;
    }
}
