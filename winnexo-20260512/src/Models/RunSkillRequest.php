<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RunSkillRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $arguments;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'arguments' => 'arguments',
        'clientToken' => 'clientToken',
        'model' => 'model',
        'operatingObjectName' => 'operatingObjectName',
        'skillCode' => 'skillCode',
        'skillName' => 'skillName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->arguments)) {
            Model::validateArray($this->arguments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            if (\is_array($this->arguments)) {
                $res['arguments'] = [];
                foreach ($this->arguments as $key1 => $value1) {
                    $res['arguments'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['arguments'])) {
            if (!empty($map['arguments'])) {
                $model->arguments = [];
                foreach ($map['arguments'] as $key1 => $value1) {
                    $model->arguments[$key1] = $value1;
                }
            }
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
