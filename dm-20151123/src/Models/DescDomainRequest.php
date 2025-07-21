<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DescDomainRequest extends Model
{
    /**
     * @description Domain ID. Can be obtained through QueryDomainByParam.
     *
     * This parameter is required.
     *
     * @example 13464
     *
     * @var int
     */
    public $domainId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Determines whether to perform real-time DNS resolution
     *
     * @example true
     *
     * @var bool
     */
    public $requireRealTimeDnsRecords;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'domainId' => 'DomainId',
        'ownerId' => 'OwnerId',
        'requireRealTimeDnsRecords' => 'RequireRealTimeDnsRecords',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requireRealTimeDnsRecords) {
            $res['RequireRealTimeDnsRecords'] = $this->requireRealTimeDnsRecords;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequireRealTimeDnsRecords'])) {
            $model->requireRealTimeDnsRecords = $map['RequireRealTimeDnsRecords'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
