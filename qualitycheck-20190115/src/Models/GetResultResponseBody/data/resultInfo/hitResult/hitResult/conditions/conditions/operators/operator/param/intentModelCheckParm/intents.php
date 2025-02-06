<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm\intents\intent;

class intents extends Model
{
    /**
     * @var intent[]
     */
    public $intent;
    protected $_name = [
        'intent' => 'Intent',
    ];

    public function validate()
    {
        if (\is_array($this->intent)) {
            Model::validateArray($this->intent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intent) {
            if (\is_array($this->intent)) {
                $res['Intent'] = [];
                $n1            = 0;
                foreach ($this->intent as $item1) {
                    $res['Intent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Intent'])) {
            if (!empty($map['Intent'])) {
                $model->intent = [];
                $n1            = 0;
                foreach ($map['Intent'] as $item1) {
                    $model->intent[$n1++] = intent::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
