<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\downStreamNodeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\startNodeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\upStreamNodeList;

class nodeDagInfo extends Model
{
    /**
     * @var downStreamNodeList[]
     */
    public $downStreamNodeList;

    /**
     * @var startNodeList[]
     */
    public $startNodeList;

    /**
     * @var upStreamNodeList[]
     */
    public $upStreamNodeList;
    protected $_name = [
        'downStreamNodeList' => 'DownStreamNodeList',
        'startNodeList' => 'StartNodeList',
        'upStreamNodeList' => 'UpStreamNodeList',
    ];

    public function validate()
    {
        if (\is_array($this->downStreamNodeList)) {
            Model::validateArray($this->downStreamNodeList);
        }
        if (\is_array($this->startNodeList)) {
            Model::validateArray($this->startNodeList);
        }
        if (\is_array($this->upStreamNodeList)) {
            Model::validateArray($this->upStreamNodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downStreamNodeList) {
            if (\is_array($this->downStreamNodeList)) {
                $res['DownStreamNodeList'] = [];
                $n1 = 0;
                foreach ($this->downStreamNodeList as $item1) {
                    $res['DownStreamNodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startNodeList) {
            if (\is_array($this->startNodeList)) {
                $res['StartNodeList'] = [];
                $n1 = 0;
                foreach ($this->startNodeList as $item1) {
                    $res['StartNodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->upStreamNodeList) {
            if (\is_array($this->upStreamNodeList)) {
                $res['UpStreamNodeList'] = [];
                $n1 = 0;
                foreach ($this->upStreamNodeList as $item1) {
                    $res['UpStreamNodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DownStreamNodeList'])) {
            if (!empty($map['DownStreamNodeList'])) {
                $model->downStreamNodeList = [];
                $n1 = 0;
                foreach ($map['DownStreamNodeList'] as $item1) {
                    $model->downStreamNodeList[$n1++] = downStreamNodeList::fromMap($item1);
                }
            }
        }

        if (isset($map['StartNodeList'])) {
            if (!empty($map['StartNodeList'])) {
                $model->startNodeList = [];
                $n1 = 0;
                foreach ($map['StartNodeList'] as $item1) {
                    $model->startNodeList[$n1++] = startNodeList::fromMap($item1);
                }
            }
        }

        if (isset($map['UpStreamNodeList'])) {
            if (!empty($map['UpStreamNodeList'])) {
                $model->upStreamNodeList = [];
                $n1 = 0;
                foreach ($map['UpStreamNodeList'] as $item1) {
                    $model->upStreamNodeList[$n1++] = upStreamNodeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
