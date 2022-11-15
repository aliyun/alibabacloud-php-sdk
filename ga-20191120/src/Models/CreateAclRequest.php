<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAclRequest\aclEntries;
use AlibabaCloud\Tea\Model;

class CreateAclRequest extends Model
{
    /**
     * @var aclEntries[]
     */
    public $aclEntries;

    /**
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'aclEntries'       => 'AclEntries',
        'aclName'          => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'clientToken'      => 'ClientToken',
        'dryRun'           => 'DryRun',
        'regionId'         => 'RegionId',
        'resourceGroupId'  => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntries) {
            $res['AclEntries'] = [];
            if (null !== $this->aclEntries && \is_array($this->aclEntries)) {
                $n = 0;
                foreach ($this->aclEntries as $item) {
                    $res['AclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntries'])) {
            if (!empty($map['AclEntries'])) {
                $model->aclEntries = [];
                $n                 = 0;
                foreach ($map['AclEntries'] as $item) {
                    $model->aclEntries[$n++] = null !== $item ? aclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
