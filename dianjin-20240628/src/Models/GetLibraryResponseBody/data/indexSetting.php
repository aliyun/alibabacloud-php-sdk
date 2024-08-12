<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\chunkStrategy;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\modelConfig;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\queryEnhancer;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\recallStrategy;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\textIndexSetting;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting\vectorIndexSetting;
use AlibabaCloud\Tea\Model;

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
        'chunkStrategy'      => 'chunkStrategy',
        'modelConfig'        => 'modelConfig',
        'promptRoleStyle'    => 'promptRoleStyle',
        'queryEnhancer'      => 'queryEnhancer',
        'recallStrategy'     => 'recallStrategy',
        'textIndexSetting'   => 'textIndexSetting',
        'vectorIndexSetting' => 'vectorIndexSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkStrategy) {
            $res['chunkStrategy'] = null !== $this->chunkStrategy ? $this->chunkStrategy->toMap() : null;
        }
        if (null !== $this->modelConfig) {
            $res['modelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toMap() : null;
        }
        if (null !== $this->promptRoleStyle) {
            $res['promptRoleStyle'] = $this->promptRoleStyle;
        }
        if (null !== $this->queryEnhancer) {
            $res['queryEnhancer'] = null !== $this->queryEnhancer ? $this->queryEnhancer->toMap() : null;
        }
        if (null !== $this->recallStrategy) {
            $res['recallStrategy'] = null !== $this->recallStrategy ? $this->recallStrategy->toMap() : null;
        }
        if (null !== $this->textIndexSetting) {
            $res['textIndexSetting'] = null !== $this->textIndexSetting ? $this->textIndexSetting->toMap() : null;
        }
        if (null !== $this->vectorIndexSetting) {
            $res['vectorIndexSetting'] = null !== $this->vectorIndexSetting ? $this->vectorIndexSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexSetting
     */
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
