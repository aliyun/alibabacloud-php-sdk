<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListHotWordsTasksResponseBody\data\hotWordsTaskPo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var hotWordsTaskPo[]
     */
    public $hotWordsTaskPo;
    protected $_name = [
        'hotWordsTaskPo' => 'HotWordsTaskPo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotWordsTaskPo) {
            $res['HotWordsTaskPo'] = [];
            if (null !== $this->hotWordsTaskPo && \is_array($this->hotWordsTaskPo)) {
                $n = 0;
                foreach ($this->hotWordsTaskPo as $item) {
                    $res['HotWordsTaskPo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotWordsTaskPo'])) {
            if (!empty($map['HotWordsTaskPo'])) {
                $model->hotWordsTaskPo = [];
                $n                     = 0;
                foreach ($map['HotWordsTaskPo'] as $item) {
                    $model->hotWordsTaskPo[$n++] = null !== $item ? hotWordsTaskPo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
