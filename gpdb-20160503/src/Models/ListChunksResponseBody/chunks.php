<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListChunksResponseBody;

use AlibabaCloud\Dara\Model;

class chunks extends Model
{
    /**
     * @var chunks\chunks[]
     */
    public $chunks;
    protected $_name = [
        'chunks' => 'chunks',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['chunks'] as $item1) {
                    $model->chunks[$n1] = chunks\chunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
