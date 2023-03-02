<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponseBody\data\nodeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information of the nodes returned.
     *
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @description The output name of the current node.
     *
     * @example test_0709_1.630003556_out
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'nodeList' => 'NodeList',
        'output'   => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeList) {
            $res['NodeList'] = [];
            if (null !== $this->nodeList && \is_array($this->nodeList)) {
                $n = 0;
                foreach ($this->nodeList as $item) {
                    $res['NodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n               = 0;
                foreach ($map['NodeList'] as $item) {
                    $model->nodeList[$n++] = null !== $item ? nodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
