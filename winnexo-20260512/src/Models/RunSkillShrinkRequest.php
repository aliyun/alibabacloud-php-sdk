<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class RunSkillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $argumentsShrink;

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
        'argumentsShrink' => 'arguments',
        'clientToken' => 'clientToken',
        'model' => 'model',
        'operatingObjectName' => 'operatingObjectName',
        'skillCode' => 'skillCode',
        'skillName' => 'skillName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argumentsShrink) {
            $res['arguments'] = $this->argumentsShrink;
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
            $model->argumentsShrink = $map['arguments'];
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
