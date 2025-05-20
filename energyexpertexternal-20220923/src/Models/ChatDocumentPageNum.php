<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatDocumentPageNum extends Model
{
    /**
     * @var int
     */
    public $num;

    /**
     * @var ChatRefDocPostion[][]
     */
    public $pos;
    protected $_name = [
        'num' => 'num',
        'pos' => 'pos',
    ];

    public function validate()
    {
        if (\is_array($this->pos)) {
            Model::validateArray($this->pos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }

        if (null !== $this->pos) {
            if (\is_array($this->pos)) {
                $res['pos'] = [];
                $n1 = 0;
                foreach ($this->pos as $item1) {
                    if (\is_array($item1)) {
                        $res['pos'][$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['pos'][$n1++][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
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
        if (isset($map['num'])) {
            $model->num = $map['num'];
        }

        if (isset($map['pos'])) {
            if (!empty($map['pos'])) {
                $model->pos = [];
                $n1 = 0;
                foreach ($map['pos'] as $item1) {
                    if (!empty($item1)) {
                        $model->pos[$n1++] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->pos[$n1++][$n2++] = ChatRefDocPostion::fromMap($item2);
                        }
                    }
                }
            }
        }

        return $model;
    }
}
