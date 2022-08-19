<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody;

use AlibabaCloud\Tea\Model;

class prefixLists extends Model
{
    /**
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prefixListDescription;

    /**
     * @var string
     */
    public $prefixListId;

    /**
     * @var string
     */
    public $prefixListName;

    /**
     * @var string
     */
    public $prefixListStatus;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cidrBlocks'            => 'CidrBlocks',
        'creationTime'          => 'CreationTime',
        'ipVersion'             => 'IpVersion',
        'maxEntries'            => 'MaxEntries',
        'ownerId'               => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId'          => 'PrefixListId',
        'prefixListName'        => 'PrefixListName',
        'prefixListStatus'      => 'PrefixListStatus',
        'shareType'             => 'ShareType',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            $res['CidrBlocks'] = $this->cidrBlocks;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
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
        if (null !== $this->prefixListStatus) {
            $res['PrefixListStatus'] = $this->prefixListStatus;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = $map['CidrBlocks'];
            }
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
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
        if (isset($map['PrefixListStatus'])) {
            $model->prefixListStatus = $map['PrefixListStatus'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
