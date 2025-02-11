<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;
    /**
     * @var string
     */
    public $calledNumber;
    /**
     * @var string
     */
    public $callerNumber;
    /**
     * @var string
     */
    public $outId;
    /**
     * @var mixed[]
     */
    public $promptParam;
    /**
     * @var mixed[]
     */
    public $startWordParam;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'calledNumber'    => 'CalledNumber',
        'callerNumber'    => 'CallerNumber',
        'outId'           => 'OutId',
        'promptParam'     => 'PromptParam',
        'startWordParam'  => 'StartWordParam',
    ];

    public function validate()
    {
        if (\is_array($this->promptParam)) {
            Model::validateArray($this->promptParam);
        }
        if (\is_array($this->startWordParam)) {
            Model::validateArray($this->startWordParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->promptParam) {
            if (\is_array($this->promptParam)) {
                $res['PromptParam'] = [];
                foreach ($this->promptParam as $key1 => $value1) {
                    $res['PromptParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startWordParam) {
            if (\is_array($this->startWordParam)) {
                $res['StartWordParam'] = [];
                foreach ($this->startWordParam as $key1 => $value1) {
                    $res['StartWordParam'][$key1] = $value1;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['PromptParam'])) {
            if (!empty($map['PromptParam'])) {
                $model->promptParam = [];
                foreach ($map['PromptParam'] as $key1 => $value1) {
                    $model->promptParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['StartWordParam'])) {
            if (!empty($map['StartWordParam'])) {
                $model->startWordParam = [];
                foreach ($map['StartWordParam'] as $key1 => $value1) {
                    $model->startWordParam[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
