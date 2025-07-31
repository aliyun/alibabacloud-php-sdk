<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\downStreamNodeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\startNodeList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo\upStreamNodeList;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downStreamNodeList) {
            $res['DownStreamNodeList'] = [];
            if (null !== $this->downStreamNodeList && \is_array($this->downStreamNodeList)) {
                $n = 0;
                foreach ($this->downStreamNodeList as $item) {
                    $res['DownStreamNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startNodeList) {
            $res['StartNodeList'] = [];
            if (null !== $this->startNodeList && \is_array($this->startNodeList)) {
                $n = 0;
                foreach ($this->startNodeList as $item) {
                    $res['StartNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upStreamNodeList) {
            $res['UpStreamNodeList'] = [];
            if (null !== $this->upStreamNodeList && \is_array($this->upStreamNodeList)) {
                $n = 0;
                foreach ($this->upStreamNodeList as $item) {
                    $res['UpStreamNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeDagInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownStreamNodeList'])) {
            if (!empty($map['DownStreamNodeList'])) {
                $model->downStreamNodeList = [];
                $n = 0;
                foreach ($map['DownStreamNodeList'] as $item) {
                    $model->downStreamNodeList[$n++] = null !== $item ? downStreamNodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartNodeList'])) {
            if (!empty($map['StartNodeList'])) {
                $model->startNodeList = [];
                $n = 0;
                foreach ($map['StartNodeList'] as $item) {
                    $model->startNodeList[$n++] = null !== $item ? startNodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpStreamNodeList'])) {
            if (!empty($map['UpStreamNodeList'])) {
                $model->upStreamNodeList = [];
                $n = 0;
                foreach ($map['UpStreamNodeList'] as $item) {
                    $model->upStreamNodeList[$n++] = null !== $item ? upStreamNodeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
