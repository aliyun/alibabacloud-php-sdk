<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateNamespaceVpcRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @description vpc-2ze0i263cnn311nvj\\*\\*\\*\\*
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example vpc-2ze0i263cnn311nvj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceId'      => 'NamespaceId',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNamespaceVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
