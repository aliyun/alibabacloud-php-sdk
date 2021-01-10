<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\pornResult\pornTexts\pornText;
use AlibabaCloud\Tea\Model;

class pornTexts extends Model
{
    /**
     * @var pornText[]
     */
    public $pornText;
    protected $_name = [
        'pornText' => 'PornText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornText) {
            $res['PornText'] = [];
            if (null !== $this->pornText && \is_array($this->pornText)) {
                $n = 0;
                foreach ($this->pornText as $item) {
                    $res['PornText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornText'])) {
            if (!empty($map['PornText'])) {
                $model->pornText = [];
                $n               = 0;
                foreach ($map['PornText'] as $item) {
                    $model->pornText[$n++] = null !== $item ? pornText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
