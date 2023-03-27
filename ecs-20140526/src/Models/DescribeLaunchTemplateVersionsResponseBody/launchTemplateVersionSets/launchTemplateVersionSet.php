<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;
use AlibabaCloud\Tea\Model;

class launchTemplateVersionSet extends Model
{
    /**
     * @description The time when the launch template version was created.
     *
     * @example 2022-01-17T08:22:43Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The creator of the launch template version.
     *
     * @example 123456789****
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description Indicates whether the launch template version is the default version.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultVersion;

    /**
     * @description The configurations of the launch template.
     *
     * @var launchTemplateData
     */
    public $launchTemplateData;

    /**
     * @description The ID of the template.
     *
     * @example lt-bp67acfmxazb4p****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The name of the launch template version.
     *
     * @example testLaunchTemplateName
     *
     * @var string
     */
    public $launchTemplateName;

    /**
     * @description The time when the launch template version was modified.
     *
     * @example 2022-01-17T08:40:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The description of the launch template version.
     *
     * @example testVersionDescription
     *
     * @var string
     */
    public $versionDescription;

    /**
     * @description The number of the launch template version.
     *
     * @example 1
     *
     * @var int
     */
    public $versionNumber;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'createdBy'          => 'CreatedBy',
        'defaultVersion'     => 'DefaultVersion',
        'launchTemplateData' => 'LaunchTemplateData',
        'launchTemplateId'   => 'LaunchTemplateId',
        'launchTemplateName' => 'LaunchTemplateName',
        'modifiedTime'       => 'ModifiedTime',
        'versionDescription' => 'VersionDescription',
        'versionNumber'      => 'VersionNumber',
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
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->launchTemplateData) {
            $res['LaunchTemplateData'] = null !== $this->launchTemplateData ? $this->launchTemplateData->toMap() : null;
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
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersionSet
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
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['LaunchTemplateData'])) {
            $model->launchTemplateData = launchTemplateData::fromMap($map['LaunchTemplateData']);
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
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }

        return $model;
    }
}
