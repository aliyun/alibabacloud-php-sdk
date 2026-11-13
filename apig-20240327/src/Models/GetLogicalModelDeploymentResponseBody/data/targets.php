<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetLogicalModelDeploymentResponseBody\data;

use AlibabaCloud\Dara\Model;

class targets extends Model
{
    /**
     * @var string
     */
    public $configRevision;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $httpApiId;

    /**
     * @var mixed[]
     */
    public $stages;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'configRevision' => 'configRevision',
        'environmentId' => 'environmentId',
        'error' => 'error',
        'httpApiId' => 'httpApiId',
        'stages' => 'stages',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRevision) {
            $res['configRevision'] = $this->configRevision;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->httpApiId) {
            $res['httpApiId'] = $this->httpApiId;
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['stages'] = [];
                foreach ($this->stages as $key1 => $value1) {
                    $res['stages'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['configRevision'])) {
            $model->configRevision = $map['configRevision'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['httpApiId'])) {
            $model->httpApiId = $map['httpApiId'];
        }

        if (isset($map['stages'])) {
            if (!empty($map['stages'])) {
                $model->stages = [];
                foreach ($map['stages'] as $key1 => $value1) {
                    $model->stages[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
