<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyActionEventVerifyPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serverPublicKey;
    protected $_name = [
        'requestId'       => 'RequestId',
        'regionId'        => 'RegionId',
        'serverPublicKey' => 'ServerPublicKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverPublicKey) {
            $res['ServerPublicKey'] = $this->serverPublicKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyActionEventVerifyPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerPublicKey'])) {
            $model->serverPublicKey = $map['ServerPublicKey'];
        }

        return $model;
    }
}
