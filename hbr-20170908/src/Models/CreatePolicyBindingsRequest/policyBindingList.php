<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;
use AlibabaCloud\Tea\Model;

class policyBindingList extends Model
{
    /**
     * @description Advanced options.
     *
     * @var advancedOptions
     */
    public $advancedOptions;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up and restored within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up and restored within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up and restored across Alibaba Cloud accounts.
     *
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The source Alibaba Cloud account ID when backup across Alibaba Cloud accounts.
     *
     * @example 144**********732
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the data source.
     *
     * @example i-bp1************dl8
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The description of the association.
     *
     * @example Bind data sources to a backup policy
     *
     * @var string
     */
    public $policyBindingDescription;

    /**
     * @description The prefix of the path to the folder that you want to back up. By default, the entire OSS bucket is backed up.
     *
     * @example backup/
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **UDM_ECS**: ECS instance backup
     *
     * @example UDM_ECS
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'advancedOptions'          => 'AdvancedOptions',
        'crossAccountRoleName'     => 'CrossAccountRoleName',
        'crossAccountType'         => 'CrossAccountType',
        'crossAccountUserId'       => 'CrossAccountUserId',
        'dataSourceId'             => 'DataSourceId',
        'policyBindingDescription' => 'PolicyBindingDescription',
        'source'                   => 'Source',
        'sourceType'               => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedOptions) {
            $res['AdvancedOptions'] = null !== $this->advancedOptions ? $this->advancedOptions->toMap() : null;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->policyBindingDescription) {
            $res['PolicyBindingDescription'] = $this->policyBindingDescription;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyBindingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedOptions'])) {
            $model->advancedOptions = advancedOptions::fromMap($map['AdvancedOptions']);
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PolicyBindingDescription'])) {
            $model->policyBindingDescription = $map['PolicyBindingDescription'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
