<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamURLRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $auth;

    /**
     * @example ocs*****ace
     *
     * @var string
     */
    public $authKey;

    /**
     * @example 1571649499
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @description This parameter is required.
     *
     * @example 323*****997-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example rtmp
     *
     * @var string
     */
    public $outProtocol;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 1571639499
     *
     * @var int
     */
    public $startTime;

    /**
     * @example sd
     *
     * @var string
     */
    public $transcode;

    /**
     * @example live
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'auth'        => 'Auth',
        'authKey'     => 'AuthKey',
        'endTime'     => 'EndTime',
        'expire'      => 'Expire',
        'id'          => 'Id',
        'outProtocol' => 'OutProtocol',
        'ownerId'     => 'OwnerId',
        'startTime'   => 'StartTime',
        'transcode'   => 'Transcode',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->transcode) {
            $res['Transcode'] = $this->transcode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Transcode'])) {
            $model->transcode = $map['Transcode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
