<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody\launchTemplateSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody\launchTemplateSets\launchTemplateSet\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateSet extends Model
{
    /**
     * @description The ID of the resource group to which the launch template belongs.
     *
     * @example 2018-05-14T14:18:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The latest version number of the launch template.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The time when the launch template was modified.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultVersionNumber;

    /**
     * @description The tags of the launch template.
     *
     * @example 1
     *
     * @var int
     */
    public $latestVersionNumber;

    /**
     * @description The time when the launch template was created.
     *
     * @example lt-m5e3ofjr1zn1aw7q****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The default version number of the launch template.
     *
     * @example wd-152630748****
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description The ID of the launch template.
     *
     * @example 2018-05-14T14:18:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The creator of the launch template.
     *
     * @example rg-acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag of the launch template.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'createdBy'            => 'CreatedBy',
        'defaultVersionNumber' => 'DefaultVersionNumber',
        'latestVersionNumber'  => 'LatestVersionNumber',
        'launchTemplateId'     => 'LaunchTemplateId',
        'launchTemplateName'   => 'LaunchTemplateName',
        'modifiedTime'         => 'ModifiedTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->defaultVersionNumber) {
            $res['DefaultVersionNumber'] = $this->defaultVersionNumber;
        }
        if (null !== $this->latestVersionNumber) {
            $res['LatestVersionNumber'] = $this->latestVersionNumber;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['DefaultVersionNumber'])) {
            $model->defaultVersionNumber = $map['DefaultVersionNumber'];
        }
        if (isset($map['LatestVersionNumber'])) {
            $model->latestVersionNumber = $map['LatestVersionNumber'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
