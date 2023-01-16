<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchIndexFileMetaShrinkRequest extends Model
{
    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @example test-topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'filesShrink'     => 'Files',
        'notifyTopicName' => 'NotifyTopicName',
        'projectName'     => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchIndexFileMetaShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
