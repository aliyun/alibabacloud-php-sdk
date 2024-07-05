<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupResponseBody extends Model
{
    /**
     * @example 31000000****00000001
     *
     * @var string
     */
    public $gbId;

    /**
     * @example 10.10.10.10
     *
     * @var string
     */
    public $gbIp;

    /**
     * @example 5060
     *
     * @var int
     */
    public $gbPort;

    /**
     * @example 33763****77224964-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gbId'      => 'GbId',
        'gbIp'      => 'GbIp',
        'gbPort'    => 'GbPort',
        'id'        => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->gbIp) {
            $res['GbIp'] = $this->gbIp;
        }
        if (null !== $this->gbPort) {
            $res['GbPort'] = $this->gbPort;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GbIp'])) {
            $model->gbIp = $map['GbIp'];
        }
        if (isset($map['GbPort'])) {
            $model->gbPort = $map['GbPort'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
