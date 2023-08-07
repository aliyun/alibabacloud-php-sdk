<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest\addPrefixListEntry;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest\removePrefixListEntry;
use AlibabaCloud\Tea\Model;

class ModifyVpcPrefixListRequest extends Model
{
    /**
     * @var addPrefixListEntry[]
     */
    public $addPrefixListEntry;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to only precheck the request. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system prechecks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the check, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The maximum number of CIDR blocks supported by the prefix list after the configuration of the prefix list is modified.
     *
     * @example 20
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The new description of the prefix list.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example newdescription
     *
     * @var string
     */
    public $prefixListDescription;

    /**
     * @description The ID of the prefix list.
     *
     * @example pl-0b7hwu67****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The new name of the prefix list.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example newname
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @description The region ID of the prefix list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var removePrefixListEntry[]
     */
    public $removePrefixListEntry;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addPrefixListEntry'    => 'AddPrefixListEntry',
        'clientToken'           => 'ClientToken',
        'dryRun'                => 'DryRun',
        'maxEntries'            => 'MaxEntries',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId'          => 'PrefixListId',
        'prefixListName'        => 'PrefixListName',
        'regionId'              => 'RegionId',
        'removePrefixListEntry' => 'RemovePrefixListEntry',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addPrefixListEntry) {
            $res['AddPrefixListEntry'] = [];
            if (null !== $this->addPrefixListEntry && \is_array($this->addPrefixListEntry)) {
                $n = 0;
                foreach ($this->addPrefixListEntry as $item) {
                    $res['AddPrefixListEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prefixListDescription) {
            $res['PrefixListDescription'] = $this->prefixListDescription;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removePrefixListEntry) {
            $res['RemovePrefixListEntry'] = [];
            if (null !== $this->removePrefixListEntry && \is_array($this->removePrefixListEntry)) {
                $n = 0;
                foreach ($this->removePrefixListEntry as $item) {
                    $res['RemovePrefixListEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ModifyVpcPrefixListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddPrefixListEntry'])) {
            if (!empty($map['AddPrefixListEntry'])) {
                $model->addPrefixListEntry = [];
                $n                         = 0;
                foreach ($map['AddPrefixListEntry'] as $item) {
                    $model->addPrefixListEntry[$n++] = null !== $item ? addPrefixListEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrefixListDescription'])) {
            $model->prefixListDescription = $map['PrefixListDescription'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemovePrefixListEntry'])) {
            if (!empty($map['RemovePrefixListEntry'])) {
                $model->removePrefixListEntry = [];
                $n                            = 0;
                foreach ($map['RemovePrefixListEntry'] as $item) {
                    $model->removePrefixListEntry[$n++] = null !== $item ? removePrefixListEntry::fromMap($item) : $item;
                }
            }
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
