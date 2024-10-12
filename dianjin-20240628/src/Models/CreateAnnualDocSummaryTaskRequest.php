<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateAnnualDocSummaryTaskRequest\docInfos;
use AlibabaCloud\Tea\Model;

class CreateAnnualDocSummaryTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $anaYears;

    /**
     * @description This parameter is required.
     *
     * @var docInfos[]
     */
    public $docInfos;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTable;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @description This parameter is required.
     *
     * @example qwen-plus
     *
     * @var string
     */
    public $modelId;
    protected $_name = [
        'anaYears'    => 'anaYears',
        'docInfos'    => 'docInfos',
        'enableTable' => 'enableTable',
        'instruction' => 'instruction',
        'modelId'     => 'modelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anaYears) {
            $res['anaYears'] = $this->anaYears;
        }
        if (null !== $this->docInfos) {
            $res['docInfos'] = [];
            if (null !== $this->docInfos && \is_array($this->docInfos)) {
                $n = 0;
                foreach ($this->docInfos as $item) {
                    $res['docInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableTable) {
            $res['enableTable'] = $this->enableTable;
        }
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAnnualDocSummaryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['anaYears'])) {
            if (!empty($map['anaYears'])) {
                $model->anaYears = $map['anaYears'];
            }
        }
        if (isset($map['docInfos'])) {
            if (!empty($map['docInfos'])) {
                $model->docInfos = [];
                $n               = 0;
                foreach ($map['docInfos'] as $item) {
                    $model->docInfos[$n++] = null !== $item ? docInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['enableTable'])) {
            $model->enableTable = $map['enableTable'];
        }
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
