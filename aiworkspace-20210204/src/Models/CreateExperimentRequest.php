<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description Artifact的OSS存储路径
     *
     * @example oss://test-bucket.oss-cn-hangzhou.aliyuncs.com/test
     *
     * @var string
     */
    public $artifactUri;

    /**
     * @description 标签
     *
     * @var LabelInfo[]
     */
    public $labels;

    /**
     * @description 名称
     *
     * This parameter is required.
     * @example exp-test
     *
     * @var string
     */
    public $name;

    /**
     * @description 工作空间ID
     *
     * This parameter is required.
     * @example 478**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'artifactUri'   => 'ArtifactUri',
        'labels'        => 'Labels',
        'name'          => 'Name',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->artifactUri) {
            $res['ArtifactUri'] = $this->artifactUri;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['ArtifactUri'])) {
            $model->artifactUri = $map['ArtifactUri'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? LabelInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
