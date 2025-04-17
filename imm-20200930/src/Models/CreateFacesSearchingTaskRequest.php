<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFacesSearchingTaskRequest\sources;

class CreateFacesSearchingTaskRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResult;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'maxResult' => 'MaxResult',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'sources' => 'Sources',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1++] = sources::fromMap($item1);
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
