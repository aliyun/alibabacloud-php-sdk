<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateDatasetVersionRequest extends Model
{
    /**
     * @var int
     */
    public $dataCount;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $datasetTaskRamRole;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $options;

    /**
     * @var UserMetricsEndpoint[]
     */
    public $userMetricsEndpoints;
    protected $_name = [
        'dataCount' => 'DataCount',
        'dataSize' => 'DataSize',
        'datasetTaskRamRole' => 'DatasetTaskRamRole',
        'description' => 'Description',
        'options' => 'Options',
        'userMetricsEndpoints' => 'UserMetricsEndpoints',
    ];

    public function validate()
    {
        if (\is_array($this->userMetricsEndpoints)) {
            Model::validateArray($this->userMetricsEndpoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCount) {
            $res['DataCount'] = $this->dataCount;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->datasetTaskRamRole) {
            $res['DatasetTaskRamRole'] = $this->datasetTaskRamRole;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->userMetricsEndpoints) {
            if (\is_array($this->userMetricsEndpoints)) {
                $res['UserMetricsEndpoints'] = [];
                $n1 = 0;
                foreach ($this->userMetricsEndpoints as $item1) {
                    $res['UserMetricsEndpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DataCount'])) {
            $model->dataCount = $map['DataCount'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DatasetTaskRamRole'])) {
            $model->datasetTaskRamRole = $map['DatasetTaskRamRole'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['UserMetricsEndpoints'])) {
            if (!empty($map['UserMetricsEndpoints'])) {
                $model->userMetricsEndpoints = [];
                $n1 = 0;
                foreach ($map['UserMetricsEndpoints'] as $item1) {
                    $model->userMetricsEndpoints[$n1] = UserMetricsEndpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
