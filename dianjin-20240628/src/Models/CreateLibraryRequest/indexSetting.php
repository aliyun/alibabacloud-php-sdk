<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\chunkStrategy;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\modelConfig;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\queryEnhancer;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\recallStrategy;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\textIndexSetting;
use AlibabaCloud\SDK\DianJin\V20240628\Models\CreateLibraryRequest\indexSetting\vectorIndexSetting;

class indexSetting extends Model
{
    /**
     * @var chunkStrategy
     */
    public $chunkStrategy;

    /**
     * @var modelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $promptRoleStyle;

    /**
     * @var queryEnhancer
     */
    public $queryEnhancer;

    /**
     * @var recallStrategy
     */
    public $recallStrategy;

    /**
     * @var textIndexSetting
     */
    public $textIndexSetting;

    /**
     * @var vectorIndexSetting
     */
    public $vectorIndexSetting;
    protected $_name = [
        'chunkStrategy' => 'chunkStrategy',
        'modelConfig' => 'modelConfig',
        'promptRoleStyle' => 'promptRoleStyle',
        'queryEnhancer' => 'queryEnhancer',
        'recallStrategy' => 'recallStrategy',
        'textIndexSetting' => 'textIndexSetting',
        'vectorIndexSetting' => 'vectorIndexSetting',
    ];

    public function validate()
    {
        if (null !== $this->chunkStrategy) {
            $this->chunkStrategy->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        if (null !== $this->queryEnhancer) {
            $this->queryEnhancer->validate();
        }
        if (null !== $this->recallStrategy) {
            $this->recallStrategy->validate();
        }
        if (null !== $this->textIndexSetting) {
            $this->textIndexSetting->validate();
        }
        if (null !== $this->vectorIndexSetting) {
            $this->vectorIndexSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkStrategy) {
            $res['chunkStrategy'] = null !== $this->chunkStrategy ? $this->chunkStrategy->toArray($noStream) : $this->chunkStrategy;
        }

        if (null !== $this->modelConfig) {
            $res['modelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->promptRoleStyle) {
            $res['promptRoleStyle'] = $this->promptRoleStyle;
        }

        if (null !== $this->queryEnhancer) {
            $res['queryEnhancer'] = null !== $this->queryEnhancer ? $this->queryEnhancer->toArray($noStream) : $this->queryEnhancer;
        }

        if (null !== $this->recallStrategy) {
            $res['recallStrategy'] = null !== $this->recallStrategy ? $this->recallStrategy->toArray($noStream) : $this->recallStrategy;
        }

        if (null !== $this->textIndexSetting) {
            $res['textIndexSetting'] = null !== $this->textIndexSetting ? $this->textIndexSetting->toArray($noStream) : $this->textIndexSetting;
        }

        if (null !== $this->vectorIndexSetting) {
            $res['vectorIndexSetting'] = null !== $this->vectorIndexSetting ? $this->vectorIndexSetting->toArray($noStream) : $this->vectorIndexSetting;
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
        if (isset($map['chunkStrategy'])) {
            $model->chunkStrategy = chunkStrategy::fromMap($map['chunkStrategy']);
        }

        if (isset($map['modelConfig'])) {
            $model->modelConfig = modelConfig::fromMap($map['modelConfig']);
        }

        if (isset($map['promptRoleStyle'])) {
            $model->promptRoleStyle = $map['promptRoleStyle'];
        }

        if (isset($map['queryEnhancer'])) {
            $model->queryEnhancer = queryEnhancer::fromMap($map['queryEnhancer']);
        }

        if (isset($map['recallStrategy'])) {
            $model->recallStrategy = recallStrategy::fromMap($map['recallStrategy']);
        }

        if (isset($map['textIndexSetting'])) {
            $model->textIndexSetting = textIndexSetting::fromMap($map['textIndexSetting']);
        }

        if (isset($map['vectorIndexSetting'])) {
            $model->vectorIndexSetting = vectorIndexSetting::fromMap($map['vectorIndexSetting']);
        }

        return $model;
    }
}
