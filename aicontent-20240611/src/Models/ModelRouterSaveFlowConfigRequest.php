<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterSaveFlowConfigRequest extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var int
     */
    public $rpm;

    /**
     * @var bool
     */
    public $smoothFlowEnabled;

    /**
     * @var int
     */
    public $tpm;
    protected $_name = [
        'modelId' => 'modelId',
        'rpm' => 'rpm',
        'smoothFlowEnabled' => 'smoothFlowEnabled',
        'tpm' => 'tpm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->rpm) {
            $res['rpm'] = $this->rpm;
        }

        if (null !== $this->smoothFlowEnabled) {
            $res['smoothFlowEnabled'] = $this->smoothFlowEnabled;
        }

        if (null !== $this->tpm) {
            $res['tpm'] = $this->tpm;
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
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['rpm'])) {
            $model->rpm = $map['rpm'];
        }

        if (isset($map['smoothFlowEnabled'])) {
            $model->smoothFlowEnabled = $map['smoothFlowEnabled'];
        }

        if (isset($map['tpm'])) {
            $model->tpm = $map['tpm'];
        }

        return $model;
    }
}
