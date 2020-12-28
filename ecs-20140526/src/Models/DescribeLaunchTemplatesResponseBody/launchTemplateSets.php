<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplatesResponseBody\launchTemplateSets\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateSets extends Model
{
    /**
     * @var string
     */
    public $launchTemplateName;

    /**
     * @var int
     */
    public $defaultVersionNumber;

    /**
     * @var string
     */
    public $modifiedTime;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $latestVersionNumber;
    protected $_name = [
        'launchTemplateName'   => 'LaunchTemplateName',
        'defaultVersionNumber' => 'DefaultVersionNumber',
        'modifiedTime'         => 'ModifiedTime',
        'launchTemplateId'     => 'LaunchTemplateId',
        'createTime'           => 'CreateTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'createdBy'            => 'CreatedBy',
        'tags'                 => 'Tags',
        'latestVersionNumber'  => 'LatestVersionNumber',
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
        if (null !== $this->defaultVersionNumber) {
            $res['DefaultVersionNumber'] = $this->defaultVersionNumber;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersionNumber) {
            $res['LatestVersionNumber'] = $this->latestVersionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }
        if (isset($map['DefaultVersionNumber'])) {
            $model->defaultVersionNumber = $map['DefaultVersionNumber'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersionNumber'])) {
            $model->latestVersionNumber = $map['LatestVersionNumber'];
        }

        return $model;
    }
}
