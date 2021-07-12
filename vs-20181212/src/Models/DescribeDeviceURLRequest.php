<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceURLRequest extends Model
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
    public $stream;

    /**
     * @var string
     */
    public $outProtocol;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $auth;

    /**
     * @var int
     */
    public $expire;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'id'          => 'Id',
        'stream'      => 'Stream',
        'outProtocol' => 'OutProtocol',
        'mode'        => 'Mode',
        'type'        => 'Type',
        'auth'        => 'Auth',
        'expire'      => 'Expire',
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
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->outProtocol) {
            $res['OutProtocol'] = $this->outProtocol;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceURLRequest
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
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['OutProtocol'])) {
            $model->outProtocol = $map['OutProtocol'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        return $model;
    }
}
