<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainRequest extends Model
{
    /**
     * @description Domain name, length 1-50, can include numbers, uppercase letters, lowercase letters, ., and -.
     *
     * This parameter is required.
     *
     * @example sub.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The selector field in the DKIM protocol, used to identify a specific public key. It is recommended to leave it blank, as the system will automatically generate it based on cluster information. If the user specifies it manually, for example, if the sending domain is "sub.example.com" and dkimSelector is set to "default", then the host record will be "default._domainkey.sub"
     * Constraints:
     * 1. The length must not exceed 60 characters.
     * 2. It must consist of visible characters only.
     * 3. It cannot start with a hyphen (-).
     * 4. It cannot end with a hyphen (-).
     * 5. It cannot contain any of the following characters: _ :;/!*~.@#$%^&()+=[{]}|?<>,\\""
     *
     * @example default
     *
     * @var string
     */
    public $dkimSelector;
    protected $_name = [
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'dkimSelector' => 'dkimSelector',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->dkimSelector) {
            $res['dkimSelector'] = $this->dkimSelector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['dkimSelector'])) {
            $model->dkimSelector = $map['dkimSelector'];
        }

        return $model;
    }
}
