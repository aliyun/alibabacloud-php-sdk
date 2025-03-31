<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomScenePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $objects;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'endTime' => 'EndTime',
        'name' => 'Name',
        'objects' => 'Objects',
        'policyId' => 'PolicyId',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'template' => 'Template',
    ];

    public function validate()
    {
        if (\is_array($this->objects)) {
            Model::validateArray($this->objects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->objects) {
            if (\is_array($this->objects)) {
                $res['Objects'] = [];
                $n1 = 0;
                foreach ($this->objects as $item1) {
                    $res['Objects'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n1 = 0;
                foreach ($map['Objects'] as $item1) {
                    $model->objects[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
