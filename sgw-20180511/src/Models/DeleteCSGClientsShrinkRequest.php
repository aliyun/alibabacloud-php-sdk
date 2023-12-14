<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteCSGClientsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientIdsShrink;

    /**
     * @var string
     */
    public $clientRegionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'clientIdsShrink' => 'ClientIds',
        'clientRegionId'  => 'ClientRegionId',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIdsShrink) {
            $res['ClientIds'] = $this->clientIdsShrink;
        }
        if (null !== $this->clientRegionId) {
            $res['ClientRegionId'] = $this->clientRegionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCSGClientsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIdsShrink = $map['ClientIds'];
        }
        if (isset($map['ClientRegionId'])) {
            $model->clientRegionId = $map['ClientRegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
