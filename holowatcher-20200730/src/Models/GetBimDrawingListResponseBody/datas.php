<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingListResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingListResponseBody\datas\architecture;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingListResponseBody\datas\structure;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var architecture[]
     */
    public $architecture;

    /**
     * @var structure[]
     */
    public $structure;
    protected $_name = [
        'architecture' => 'Architecture',
        'structure'    => 'Structure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = [];
            if (null !== $this->architecture && \is_array($this->architecture)) {
                $n = 0;
                foreach ($this->architecture as $item) {
                    $res['Architecture'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->structure) {
            $res['Structure'] = [];
            if (null !== $this->structure && \is_array($this->structure)) {
                $n = 0;
                foreach ($this->structure as $item) {
                    $res['Structure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            if (!empty($map['Architecture'])) {
                $model->architecture = [];
                $n                   = 0;
                foreach ($map['Architecture'] as $item) {
                    $model->architecture[$n++] = null !== $item ? architecture::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Structure'])) {
            if (!empty($map['Structure'])) {
                $model->structure = [];
                $n                = 0;
                foreach ($map['Structure'] as $item) {
                    $model->structure[$n++] = null !== $item ? structure::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
