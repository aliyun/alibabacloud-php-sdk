<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators\operator\param\intentModelCheckParm\intents\intent;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intent) {
            $res['Intent'] = [];
            if (null !== $this->intent && \is_array($this->intent)) {
                $n = 0;
                foreach ($this->intent as $item) {
                    $res['Intent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Intent'])) {
            if (!empty($map['Intent'])) {
                $model->intent = [];
                $n             = 0;
                foreach ($map['Intent'] as $item) {
                    $model->intent[$n++] = null !== $item ? intent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
