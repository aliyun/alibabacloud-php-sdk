<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $gbIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $gbPort;
    protected $_name = [
        'gbIp'      => 'GbIp',
        'requestId' => 'RequestId',
        'gbId'      => 'GbId',
        'id'        => 'Id',
        'gbPort'    => 'GbPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbIp) {
            $res['GbIp'] = $this->gbIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->gbPort) {
            $res['GbPort'] = $this->gbPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbIp'])) {
            $model->gbIp = $map['GbIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['GbPort'])) {
            $model->gbPort = $map['GbPort'];
        }

        return $model;
    }
}
