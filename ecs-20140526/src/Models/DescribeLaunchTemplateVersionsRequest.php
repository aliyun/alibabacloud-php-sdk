<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeLaunchTemplateVersionsRequest extends Model
{
    /**
     * @description Specifies whether to query the default version.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultVersion;

    /**
     * @description Specifies whether to query the configurations of the launch template. Valid values:
     *
     *   true: queries the basic information and other details of the launch template. The details include the image ID and the size of the system disk.
     *   false: queries only the basic information of the launch template. The basic information includes the template ID, the template name, and the default version.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $detailFlag;

    /**
     * @description The ID of the launch template.
     *
     * You must specify LaunchTemplateId or LaunchTemplateName to determine a launch template.
     * @example lt-bp168lnahrdwl39p****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The name of the launch template.
     *
     * @example testLaunchTemplateName
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description The one or more versions of the launch template.
     *
     * @example 1
     *
     * @var int[]
     */
    public $launchTemplateVersion;

    /**
     * @description The maximum version number in the version range to query.
     *
     * @example 10
     *
     * @var int
     */
    public $maxVersion;

    /**
     * @description The minimum version number in the version range to query.
     *
     * @example 1
     *
     * @var int
     */
    public $minVersion;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the launch template.
     *
     * You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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
    protected $_name = [
        'defaultVersion'        => 'DefaultVersion',
        'detailFlag'            => 'DetailFlag',
        'launchTemplateId'      => 'LaunchTemplateId',
        'launchTemplateName'    => 'LaunchTemplateName',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'maxVersion'            => 'MaxVersion',
        'minVersion'            => 'MinVersion',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->detailFlag) {
            $res['DetailFlag'] = $this->detailFlag;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->minVersion) {
            $res['MinVersion'] = $this->minVersion;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLaunchTemplateVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['DetailFlag'])) {
            $model->detailFlag = $map['DetailFlag'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            if (!empty($map['LaunchTemplateVersion'])) {
                $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
            }
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['MinVersion'])) {
            $model->minVersion = $map['MinVersion'];
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

        return $model;
    }
}
