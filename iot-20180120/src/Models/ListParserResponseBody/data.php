<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponseBody\data\parserList;

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
        if (\is_array($this->parserList)) {
            Model::validateArray($this->parserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parserList) {
            if (\is_array($this->parserList)) {
                $res['ParserList'] = [];
                $n1 = 0;
                foreach ($this->parserList as $item1) {
                    $res['ParserList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ParserList'])) {
            if (!empty($map['ParserList'])) {
                $model->parserList = [];
                $n1 = 0;
                foreach ($map['ParserList'] as $item1) {
                    $model->parserList[$n1] = parserList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
