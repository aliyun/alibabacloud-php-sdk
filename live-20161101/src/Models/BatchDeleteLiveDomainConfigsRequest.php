<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteLiveDomainConfigsRequest extends Model
{
    /**
     * @description The ingest domain or streaming domain. Separate multiple domain names with commas (,).
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com,example.aliyundoc.com,example.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The names of the features. Separate multiple features with commas (,). For more information, see **Features specified by the Functions parameter**.
     *
     * This parameter is required.
     *
     * @example referer_white_list_set,ip_black_list_set
     *
     * @var string
     */
    public $functionNames;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'functionNames' => 'FunctionNames',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->functionNames) {
            $res['FunctionNames'] = $this->functionNames;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteLiveDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['FunctionNames'])) {
            $model->functionNames = $map['FunctionNames'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
