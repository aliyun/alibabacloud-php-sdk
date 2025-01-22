<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class VodPackagingGroup extends Model
{
    /**
     * @var int
     */
    public $approximateAssetCount;
    /**
     * @var int
     */
    public $configurationCount;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'approximateAssetCount' => 'ApproximateAssetCount',
        'configurationCount'    => 'ConfigurationCount',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'domainName'            => 'DomainName',
        'groupName'             => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approximateAssetCount) {
            $res['ApproximateAssetCount'] = $this->approximateAssetCount;
        }

        if (null !== $this->configurationCount) {
            $res['ConfigurationCount'] = $this->configurationCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproximateAssetCount'])) {
            $model->approximateAssetCount = $map['ApproximateAssetCount'];
        }

        if (isset($map['ConfigurationCount'])) {
            $model->configurationCount = $map['ConfigurationCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
