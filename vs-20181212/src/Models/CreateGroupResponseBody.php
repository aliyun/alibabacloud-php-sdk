<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class CreateGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $gbIp;

    /**
     * @var int
     */
    public $gbPort;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gbId' => 'GbId',
        'gbIp' => 'GbIp',
        'gbPort' => 'GbPort',
        'id' => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
