<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayBlockVolumeRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $chapEnabled;

    /**
     * @example ChapInPassword
     *
     * @var string
     */
    public $chapInPassword;

    /**
     * @example user
     *
     * @var string
     */
    public $chapInUser;

    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example NFSalex***
     *
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'chapEnabled'    => 'ChapEnabled',
        'chapInPassword' => 'ChapInPassword',
        'chapInUser'     => 'ChapInUser',
        'gatewayId'      => 'GatewayId',
        'indexId'        => 'IndexId',
        'securityToken'  => 'SecurityToken',
        'size'           => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chapEnabled) {
            $res['ChapEnabled'] = $this->chapEnabled;
        }
        if (null !== $this->chapInPassword) {
            $res['ChapInPassword'] = $this->chapInPassword;
        }
        if (null !== $this->chapInUser) {
            $res['ChapInUser'] = $this->chapInUser;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayBlockVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChapEnabled'])) {
            $model->chapEnabled = $map['ChapEnabled'];
        }
        if (isset($map['ChapInPassword'])) {
            $model->chapInPassword = $map['ChapInPassword'];
        }
        if (isset($map['ChapInUser'])) {
            $model->chapInUser = $map['ChapInUser'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
