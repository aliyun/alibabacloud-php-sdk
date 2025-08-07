<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm\intents;

class intentModelCheckParm extends Model
{
    /**
     * @var intents
     */
    public $intents;

    /**
     * @var string
     */
    public $modelScene;
    protected $_name = [
        'intents' => 'Intents',
        'modelScene' => 'ModelScene',
    ];

    public function validate()
    {
        if (null !== $this->intents) {
            $this->intents->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intents) {
            $res['Intents'] = null !== $this->intents ? $this->intents->toArray($noStream) : $this->intents;
        }

        if (null !== $this->modelScene) {
            $res['ModelScene'] = $this->modelScene;
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
        if (isset($map['Intents'])) {
            $model->intents = intents::fromMap($map['Intents']);
        }

        if (isset($map['ModelScene'])) {
            $model->modelScene = $map['ModelScene'];
        }

        return $model;
    }
}
