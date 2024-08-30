<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;

use AlibabaCloud\Tea\Model;

class inputChannels extends Model
{
    /**
     * @example d-475megosidivjfgfq6
     *
     * @var string
     */
    public $datasetId;

    /**
     * @example oss://pai-quickstart-cn-hangzhou.oss-cn-hangzhou-internal.aliyuncs.com/modelscope/models/qwen2-0.5b/main/
     *
     * @var string
     */
    public $inputUri;

    /**
     * @example model
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'inputUri'  => 'InputUri',
        'name'      => 'Name',
        'options'   => 'Options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->inputUri) {
            $res['InputUri'] = $this->inputUri;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['InputUri'])) {
            $model->inputUri = $map['InputUri'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
