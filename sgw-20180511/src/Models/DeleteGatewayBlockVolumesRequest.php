<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayBlockVolumesRequest extends Model
{
    /**
     * @example gw-000eg44nmxbsfwb***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example NFSalex-gx***
     *
     * @var string
     */
    public $indexId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSourceDeletion;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayId'        => 'GatewayId',
        'indexId'          => 'IndexId',
        'isSourceDeletion' => 'IsSourceDeletion',
        'securityToken'    => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->isSourceDeletion) {
            $res['IsSourceDeletion'] = $this->isSourceDeletion;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayBlockVolumesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['IsSourceDeletion'])) {
            $model->isSourceDeletion = $map['IsSourceDeletion'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
