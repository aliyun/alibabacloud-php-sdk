<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody;

use AlibabaCloud\Tea\Model;

class prefixLists extends Model
{
    /**
     * @description 前缀列表包含的网段
     *
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description IpVersion
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description 描述
     *
     * @var string
     */
    public $prefixListDescription;

    /**
     * @description 前缀列表的实例ID
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description 名称
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @description 状态
     *
     * @var string
     */
    public $prefixListStatus;
    protected $_name = [
        'cidrBlocks'            => 'CidrBlocks',
        'creationTime'          => 'CreationTime',
        'ipVersion'             => 'IpVersion',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId'          => 'PrefixListId',
        'prefixListName'        => 'PrefixListName',
        'prefixListStatus'      => 'PrefixListStatus',
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

        return $model;
    }
}
