<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest\templateTag;
use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplatesRequest extends Model
{
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
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var templateTag[]
     */
    public $templateTag;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $templateResourceGroupId;

    /**
     * @var string[]
     */
    public $launchTemplateId;

    /**
     * @var string[]
     */
    public $launchTemplateName;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'regionId'                => 'RegionId',
        'templateTag'             => 'TemplateTag',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'templateResourceGroupId' => 'TemplateResourceGroupId',
        'launchTemplateId'        => 'LaunchTemplateId',
        'launchTemplateName'      => 'LaunchTemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->templateResourceGroupId) {
            $res['TemplateResourceGroupId'] = $this->templateResourceGroupId;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TemplateResourceGroupId'])) {
            $model->templateResourceGroupId = $map['TemplateResourceGroupId'];
        }
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

        return $model;
    }
}
