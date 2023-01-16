<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateFigureClustersMergingTaskShrinkRequest extends Model
{
    /**
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example Cluster-2ab85905-23ba-4632-b2d8-1c21cfe****
     *
     * @var string
     */
    public $from;

    /**
     * @example http://1111111111.mns.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example {"key":"val"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @example Cluster-4a3a71c1-c092-4788-8826-2f65d17****
     *
     * @var string
     */
    public $to;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'from'            => 'From',
        'notifyTopicName' => 'NotifyTopicName',
        'projectName'     => 'ProjectName',
        'tagsShrink'      => 'Tags',
        'to'              => 'To',
        'userData'        => 'UserData',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFigureClustersMergingTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
