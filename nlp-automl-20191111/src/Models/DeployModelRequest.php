<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DeployModelRequest extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $optType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'modelId'      => 'ModelId',
        'optType'      => 'OptType',
        'projectId'    => 'ProjectId',
        'modelVersion' => 'ModelVersion',
        'product'      => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->optType) {
            $res['OptType'] = $this->optType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['OptType'])) {
            $model->optType = $map['OptType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
