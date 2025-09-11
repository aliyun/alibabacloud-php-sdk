<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs;

class GetRoutineResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultRelatedRecord;

    /**
     * @var string
     */
    public $description;

    /**
     * @var envs[]
     */
    public $envs;

    /**
     * @var bool
     */
    public $hasAssets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultRelatedRecord' => 'DefaultRelatedRecord',
        'description' => 'Description',
        'envs' => 'Envs',
        'hasAssets' => 'HasAssets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultRelatedRecord) {
            $res['DefaultRelatedRecord'] = $this->defaultRelatedRecord;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                $n1 = 0;
                foreach ($this->envs as $item1) {
                    $res['Envs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasAssets) {
            $res['HasAssets'] = $this->hasAssets;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultRelatedRecord'])) {
            $model->defaultRelatedRecord = $map['DefaultRelatedRecord'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                $n1 = 0;
                foreach ($map['Envs'] as $item1) {
                    $model->envs[$n1] = envs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasAssets'])) {
            $model->hasAssets = $map['HasAssets'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
