<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateFigureClustersMergingTaskRequest extends Model
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
     * @var string[]
     */
    public $froms;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var mixed[]
     */
    public $tags;

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
        'froms' => 'Froms',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'tags' => 'Tags',
        'to' => 'To',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->froms)) {
            Model::validateArray($this->froms);
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
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

        if (null !== $this->froms) {
            if (\is_array($this->froms)) {
                $res['Froms'] = [];
                $n1 = 0;
                foreach ($this->froms as $item1) {
                    $res['Froms'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Froms'])) {
                $model->froms = [];
                $n1 = 0;
                foreach ($map['Froms'] as $item1) {
                    $model->froms[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
