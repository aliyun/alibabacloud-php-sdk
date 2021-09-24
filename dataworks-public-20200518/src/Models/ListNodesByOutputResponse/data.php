<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponse\data\nodeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @var nodeList[]
     */
    public $nodeList;
    protected $_name = [
        'output'   => 'Output',
        'nodeList' => 'NodeList',
    ];

    public function validate()
    {
        Model::validateRequired('output', $this->output, true);
        Model::validateRequired('nodeList', $this->nodeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->nodeList) {
            $res['NodeList'] = [];
            if (null !== $this->nodeList && \is_array($this->nodeList)) {
                $n = 0;
                foreach ($this->nodeList as $item) {
                    $res['NodeList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n               = 0;
                foreach ($map['NodeList'] as $item) {
                    $model->nodeList[$n++] = null !== $item ? nodeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
