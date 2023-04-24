<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateSimilarImageClusteringTaskShrinkRequest extends Model
{
    /**
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example {
     * }
     * @var string
     */
    public $tagsShrink;

    /**
     * @example {
     * }
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'        => 'DatasetName',
        'notificationShrink' => 'Notification',
        'projectName'        => 'ProjectName',
        'tagsShrink'         => 'Tags',
        'userData'           => 'UserData',
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
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimilarImageClusteringTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
