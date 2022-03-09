<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\ProjectGetStatusAndOssResponseBody;

use AlibabaCloud\Tea\Model;

class projectStatusAndOssResponseList extends Model
{
    /**
     * @var string
     */
    public $datasetPublishStatus;

    /**
     * @var string
     */
    public $gmtPublished;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $ossSts;

    /**
     * @var string
     */
    public $pipelineStatus;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'datasetPublishStatus' => 'DatasetPublishStatus',
        'gmtPublished'         => 'GmtPublished',
        'icon'                 => 'Icon',
        'name'                 => 'Name',
        'ossSts'               => 'OssSts',
        'pipelineStatus'       => 'PipelineStatus',
        'projectId'            => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetPublishStatus) {
            $res['DatasetPublishStatus'] = $this->datasetPublishStatus;
        }
        if (null !== $this->gmtPublished) {
            $res['GmtPublished'] = $this->gmtPublished;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossSts) {
            $res['OssSts'] = $this->ossSts;
        }
        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectStatusAndOssResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetPublishStatus'])) {
            $model->datasetPublishStatus = $map['DatasetPublishStatus'];
        }
        if (isset($map['GmtPublished'])) {
            $model->gmtPublished = $map['GmtPublished'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssSts'])) {
            $model->ossSts = $map['OssSts'];
        }
        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
