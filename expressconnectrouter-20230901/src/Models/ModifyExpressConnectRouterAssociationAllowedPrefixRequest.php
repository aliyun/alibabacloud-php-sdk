<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class ModifyExpressConnectRouterAssociationAllowedPrefixRequest extends Model
{
    /**
     * @description The allowed route prefixes.
     *
     * @var string[]
     */
    public $allowedPrefixes;

    /**
     * @description The route prefix mode.
     *
     *   MatchMode: After you distribute new route CIDR blocks to data centers, original specific routes that are distributed are withdrawn.
     *   IncrementalMode: After you distribute new route CIDR blocks to data centers, the original specific routes that fall in the CIDR blocks that you configure are withdrawn, and the original specific routes that do not fall in the CIDR blocks are still distributed.
     *
     * @example MatchMode
     *
     * @var string
     */
    public $allowedPrefixesMode;

    /**
     * @description The ID of the association between the ECR and the VPC or TR.
     *
     * This parameter is required.
     *
     * @example ecr-assoc-9p2qxx5phpca2m****
     *
     * @var string
     */
    public $associationId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'allowedPrefixes' => 'AllowedPrefixes',
        'allowedPrefixesMode' => 'AllowedPrefixesMode',
        'associationId' => 'AssociationId',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'ownerAccount' => 'OwnerAccount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedPrefixes) {
            $res['AllowedPrefixes'] = $this->allowedPrefixes;
        }
        if (null !== $this->allowedPrefixesMode) {
            $res['AllowedPrefixesMode'] = $this->allowedPrefixesMode;
        }
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyExpressConnectRouterAssociationAllowedPrefixRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedPrefixes'])) {
            if (!empty($map['AllowedPrefixes'])) {
                $model->allowedPrefixes = $map['AllowedPrefixes'];
            }
        }
        if (isset($map['AllowedPrefixesMode'])) {
            $model->allowedPrefixesMode = $map['AllowedPrefixesMode'];
        }
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
