<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateLocationDateClusteringTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $dateOptionsShrink;

    /**
     * @var string
     */
    public $locationOptionsShrink;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'           => 'DatasetName',
        'dateOptionsShrink'     => 'DateOptions',
        'locationOptionsShrink' => 'LocationOptions',
        'notificationShrink'    => 'Notification',
        'projectName'           => 'ProjectName',
        'tagsShrink'            => 'Tags',
        'userData'              => 'UserData',
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
        if (null !== $this->dateOptionsShrink) {
            $res['DateOptions'] = $this->dateOptionsShrink;
        }
        if (null !== $this->locationOptionsShrink) {
            $res['LocationOptions'] = $this->locationOptionsShrink;
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
     * @return CreateLocationDateClusteringTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DateOptions'])) {
            $model->dateOptionsShrink = $map['DateOptions'];
        }
        if (isset($map['LocationOptions'])) {
            $model->locationOptionsShrink = $map['LocationOptions'];
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
