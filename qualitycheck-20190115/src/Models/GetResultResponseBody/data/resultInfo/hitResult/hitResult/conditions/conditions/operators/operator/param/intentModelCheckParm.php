<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm\intents;
use AlibabaCloud\Tea\Model;

class intentModelCheckParm extends Model
{
    /**
     * @description 引用的意图模型
     *
     * @var intents
     */
    public $intents;

    /**
     * @description 模型应用的场景 AGENT:客户场景、CUSTOMER:客服场景 (CUSTOMER: 客户场景, AGENT: 坐席场景)
     *
     * @var string
     */
    public $modelScene;
    protected $_name = [
        'intents'    => 'Intents',
        'modelScene' => 'ModelScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intents) {
            $res['Intents'] = null !== $this->intents ? $this->intents->toMap() : null;
        }
        if (null !== $this->modelScene) {
            $res['ModelScene'] = $this->modelScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intentModelCheckParm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Intents'])) {
            $model->intents = intents::fromMap($map['Intents']);
        }
        if (isset($map['ModelScene'])) {
            $model->modelScene = $map['ModelScene'];
        }

        return $model;
    }
}
