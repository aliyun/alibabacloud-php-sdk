<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest\templateTag;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplatesRequest extends Model
{
    /**
     * @description The IDs of launch templates. You can specify up to 100 launch template IDs. You must specify LaunchTemplateId or LaunchTemplateName to determine a launch template.
     *
     * @example lt-m5e3ofjr1zn1aw7q****
     *
     * @var string[]
     */
    public $launchTemplateId;

    /**
     * @description The names of launch templates. You can specify up to 100 launch template names.
     *
     * @example wd-152630748****
     *
     * @var string[]
     */
    public $launchTemplateName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the resource group to which the launch template belongs. If you specify this parameter to query resources, up to 1,000 resources that belong to the specified resource group can be returned.
     *
     * > Resources in the default resource group are displayed in the response regardless of whether you specify this parameter.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The tags of the launch template.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IDs of launch templates. You can specify up to 100 launch template IDs. You must specify LaunchTemplateId or LaunchTemplateName to determine a launch template.
     *
     * @example rg-acfmxazb4p****
     *
     * @var string
     */
    public $templateResourceGroupId;

    /**
     * @description The tag of the launch template.
     *
     * @var templateTag[]
     */
    public $templateTag;
    protected $_name = [
        'launchTemplateId'        => 'LaunchTemplateId',
        'launchTemplateName'      => 'LaunchTemplateName',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'templateResourceGroupId' => 'TemplateResourceGroupId',
        'templateTag'             => 'TemplateTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateResourceGroupId) {
            $res['TemplateResourceGroupId'] = $this->templateResourceGroupId;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = [];
            if (null !== $this->templateTag && \is_array($this->templateTag)) {
                $n = 0;
                foreach ($this->templateTag as $item) {
                    $res['TemplateTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateId'])) {
            if (!empty($map['LaunchTemplateId'])) {
                $model->launchTemplateId = $map['LaunchTemplateId'];
            }
        }
        if (isset($map['LaunchTemplateName'])) {
            if (!empty($map['LaunchTemplateName'])) {
                $model->launchTemplateName = $map['LaunchTemplateName'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateResourceGroupId'])) {
            $model->templateResourceGroupId = $map['TemplateResourceGroupId'];
        }
        if (isset($map['TemplateTag'])) {
            if (!empty($map['TemplateTag'])) {
                $model->templateTag = [];
                $n                  = 0;
                foreach ($map['TemplateTag'] as $item) {
                    $model->templateTag[$n++] = null !== $item ? templateTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
