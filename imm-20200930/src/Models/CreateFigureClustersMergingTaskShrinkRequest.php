<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateFigureClustersMergingTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $fromsShrink;

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
    public $to;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'from' => 'From',
        'fromsShrink' => 'Froms',
        'notificationShrink' => 'Notification',
        'projectName' => 'ProjectName',
        'tagsShrink' => 'Tags',
        'to' => 'To',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->fromsShrink) {
            $res['Froms'] = $this->fromsShrink;
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

        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['Froms'])) {
            $model->fromsShrink = $map['Froms'];
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

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
