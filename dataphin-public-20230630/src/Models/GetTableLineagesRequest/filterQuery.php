<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableLineagesRequest;

use AlibabaCloud\Dara\Model;

class filterQuery extends Model
{
    /**
     * @var bool
     */
    public $needDownstream;

    /**
     * @var bool
     */
    public $needNotExistObject;

    /**
     * @var bool
     */
    public $needUpstream;

    /**
     * @var string
     */
    public $nodeEnv;

    /**
     * @var string[]
     */
    public $nodeIdList;
    protected $_name = [
        'needDownstream' => 'NeedDownstream',
        'needNotExistObject' => 'NeedNotExistObject',
        'needUpstream' => 'NeedUpstream',
        'nodeEnv' => 'NodeEnv',
        'nodeIdList' => 'NodeIdList',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needDownstream) {
            $res['NeedDownstream'] = $this->needDownstream;
        }

        if (null !== $this->needNotExistObject) {
            $res['NeedNotExistObject'] = $this->needNotExistObject;
        }

        if (null !== $this->needUpstream) {
            $res['NeedUpstream'] = $this->needUpstream;
        }

        if (null !== $this->nodeEnv) {
            $res['NodeEnv'] = $this->nodeEnv;
        }

        if (null !== $this->nodeIdList) {
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1] = $item1;
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
        if (isset($map['NeedDownstream'])) {
            $model->needDownstream = $map['NeedDownstream'];
        }

        if (isset($map['NeedNotExistObject'])) {
            $model->needNotExistObject = $map['NeedNotExistObject'];
        }

        if (isset($map['NeedUpstream'])) {
            $model->needUpstream = $map['NeedUpstream'];
        }

        if (isset($map['NodeEnv'])) {
            $model->nodeEnv = $map['NodeEnv'];
        }

        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
