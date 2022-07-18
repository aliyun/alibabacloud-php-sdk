<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponseBody\data\parserList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var parserList[]
     */
    public $parserList;
    protected $_name = [
        'parserList' => 'ParserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parserList) {
            $res['ParserList'] = [];
            if (null !== $this->parserList && \is_array($this->parserList)) {
                $n = 0;
                foreach ($this->parserList as $item) {
                    $res['ParserList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ParserList'])) {
            if (!empty($map['ParserList'])) {
                $model->parserList = [];
                $n                 = 0;
                foreach ($map['ParserList'] as $item) {
                    $model->parserList[$n++] = null !== $item ? parserList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
