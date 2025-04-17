<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest\dateOptions;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest\locationOptions;

class CreateLocationDateClusteringTaskRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var dateOptions
     */
    public $dateOptions;

    /**
     * @var locationOptions
     */
    public $locationOptions;

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
    public $userData;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'dateOptions' => 'DateOptions',
        'locationOptions' => 'LocationOptions',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'tags' => 'Tags',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->dateOptions) {
            $this->dateOptions->validate();
        }
        if (null !== $this->locationOptions) {
            $this->locationOptions->validate();
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

        if (null !== $this->dateOptions) {
            $res['DateOptions'] = null !== $this->dateOptions ? $this->dateOptions->toArray($noStream) : $this->dateOptions;
        }

        if (null !== $this->locationOptions) {
            $res['LocationOptions'] = null !== $this->locationOptions ? $this->locationOptions->toArray($noStream) : $this->locationOptions;
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

        if (isset($map['DateOptions'])) {
            $model->dateOptions = dateOptions::fromMap($map['DateOptions']);
        }

        if (isset($map['LocationOptions'])) {
            $model->locationOptions = locationOptions::fromMap($map['LocationOptions']);
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

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
