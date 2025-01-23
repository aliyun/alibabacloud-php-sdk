<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesByOutputResponseBody\data\nodeList;

class data extends Model
{
    /**
     * @var nodeList[]
     */
    public $nodeList;
    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'nodeList' => 'NodeList',
        'output'   => 'Output',
    ];

    public function validate()
    {
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeList) {
            if (\is_array($this->nodeList)) {
                $res['NodeList'] = [];
                $n1              = 0;
                foreach ($this->nodeList as $item1) {
                    $res['NodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n1              = 0;
                foreach ($map['NodeList'] as $item1) {
                    $model->nodeList[$n1++] = nodeList::fromMap($item1);
                }
            }
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
