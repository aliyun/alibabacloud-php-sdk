<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class Experiment extends Model
{
    /**
     * @var string
     */
    public $accessibility;
    /**
     * @var string
     */
    public $artifactUri;
    /**
     * @var string
     */
    public $experimentId;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $gmtModifiedTime;
    /**
     * @var ExperimentLabel[]
     */
    public $labels;
    /**
     * @var Run
     */
    public $latestRun;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ownerId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $tensorboardLogUri;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'     => 'Accessibility',
        'artifactUri'       => 'ArtifactUri',
        'experimentId'      => 'ExperimentId',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'labels'            => 'Labels',
        'latestRun'         => 'LatestRun',
        'name'              => 'Name',
        'ownerId'           => 'OwnerId',
        'requestId'         => 'RequestId',
        'tensorboardLogUri' => 'TensorboardLogUri',
        'userId'            => 'UserId',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->latestRun) {
            $this->latestRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->artifactUri) {
            $res['ArtifactUri'] = $this->artifactUri;
        }

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->latestRun) {
            $res['LatestRun'] = null !== $this->latestRun ? $this->latestRun->toArray($noStream) : $this->latestRun;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tensorboardLogUri) {
            $res['TensorboardLogUri'] = $this->tensorboardLogUri;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['ArtifactUri'])) {
            $model->artifactUri = $map['ArtifactUri'];
        }

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = ExperimentLabel::fromMap($item1);
                }
            }
        }

        if (isset($map['LatestRun'])) {
            $model->latestRun = Run::fromMap($map['LatestRun']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TensorboardLogUri'])) {
            $model->tensorboardLogUri = $map['TensorboardLogUri'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
