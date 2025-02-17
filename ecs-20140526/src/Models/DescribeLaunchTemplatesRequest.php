<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesRequest\templateTag;

class DescribeLaunchTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $launchTemplateId;
    /**
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
     * @var string
     */
    public $templateResourceGroupId;
    /**
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
        if (\is_array($this->launchTemplateId)) {
            Model::validateArray($this->launchTemplateId);
        }
        if (\is_array($this->launchTemplateName)) {
            Model::validateArray($this->launchTemplateName);
        }
        if (\is_array($this->templateTag)) {
            Model::validateArray($this->templateTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            if (\is_array($this->launchTemplateId)) {
                $res['LaunchTemplateId'] = [];
                $n1                      = 0;
                foreach ($this->launchTemplateId as $item1) {
                    $res['LaunchTemplateId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->launchTemplateName) {
            if (\is_array($this->launchTemplateName)) {
                $res['LaunchTemplateName'] = [];
                $n1                        = 0;
                foreach ($this->launchTemplateName as $item1) {
                    $res['LaunchTemplateName'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->templateTag)) {
                $res['TemplateTag'] = [];
                $n1                 = 0;
                foreach ($this->templateTag as $item1) {
                    $res['TemplateTag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['LaunchTemplateId'])) {
            if (!empty($map['LaunchTemplateId'])) {
                $model->launchTemplateId = [];
                $n1                      = 0;
                foreach ($map['LaunchTemplateId'] as $item1) {
                    $model->launchTemplateId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LaunchTemplateName'])) {
            if (!empty($map['LaunchTemplateName'])) {
                $model->launchTemplateName = [];
                $n1                        = 0;
                foreach ($map['LaunchTemplateName'] as $item1) {
                    $model->launchTemplateName[$n1++] = $item1;
                }
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
                $n1                 = 0;
                foreach ($map['TemplateTag'] as $item1) {
                    $model->templateTag[$n1++] = templateTag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
