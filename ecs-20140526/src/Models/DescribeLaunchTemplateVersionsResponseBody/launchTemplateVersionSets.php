<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateData;
use AlibabaCloud\Tea\Model;

class launchTemplateVersionSets extends Model
{
    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var bool
     */
    public $defaultVersion;

    /**
     * @var int
     */
    public $versionNumber;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var launchTemplateData
     */
    public $launchTemplateData;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'launchTemplateName' => 'LaunchTemplateName',
        'defaultVersion'     => 'DefaultVersion',
        'versionNumber'      => 'VersionNumber',
        'modifiedTime'       => 'ModifiedTime',
        'launchTemplateData' => 'LaunchTemplateData',
        'launchTemplateId'   => 'LaunchTemplateId',
        'createTime'         => 'CreateTime',
        'createdBy'          => 'CreatedBy',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->launchTemplateData) {
            $res['LaunchTemplateData'] = null !== $this->launchTemplateData ? $this->launchTemplateData->toMap() : null;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersionSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['LaunchTemplateData'])) {
            $model->launchTemplateData = launchTemplateData::fromMap($map['LaunchTemplateData']);
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
