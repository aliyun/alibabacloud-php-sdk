<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class DeleteExpressConnectRouterAssociationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ecr-assoc-9p2qxx5phpca2m****
     *
     * @var string
     */
    public $associationId;

    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleteAttachment;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;
    protected $_name = [
        'associationId'    => 'AssociationId',
        'clientToken'      => 'ClientToken',
        'deleteAttachment' => 'DeleteAttachment',
        'dryRun'           => 'DryRun',
        'ecrId'            => 'EcrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deleteAttachment) {
            $res['DeleteAttachment'] = $this->deleteAttachment;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExpressConnectRouterAssociationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeleteAttachment'])) {
            $model->deleteAttachment = $map['DeleteAttachment'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        return $model;
    }
}
