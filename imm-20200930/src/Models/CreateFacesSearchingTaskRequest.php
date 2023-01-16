<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFacesSearchingTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateFacesSearchingTaskRequest extends Model
{
    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example 100
     *
     * @var string
     */
    public $maxResult;

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

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @example 1
     *
     * @var int
     */
    public $topK;

    /**
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'maxResult'       => 'MaxResult',
        'notifyTopicName' => 'NotifyTopicName',
        'projectName'     => 'ProjectName',
        'sources'         => 'Sources',
        'topK'            => 'TopK',
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
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFacesSearchingTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
