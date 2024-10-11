<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\downInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\startInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\upInstanceList;
use AlibabaCloud\Tea\Model;

class instanceDagInfo extends Model
{
    /**
     * @var downInstanceList[]
     */
    public $downInstanceList;

    /**
     * @var startInstanceList[]
     */
    public $startInstanceList;

    /**
     * @var upInstanceList[]
     */
    public $upInstanceList;
    protected $_name = [
        'downInstanceList'  => 'DownInstanceList',
        'startInstanceList' => 'StartInstanceList',
        'upInstanceList'    => 'UpInstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downInstanceList) {
            $res['DownInstanceList'] = [];
            if (null !== $this->downInstanceList && \is_array($this->downInstanceList)) {
                $n = 0;
                foreach ($this->downInstanceList as $item) {
                    $res['DownInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startInstanceList) {
            $res['StartInstanceList'] = [];
            if (null !== $this->startInstanceList && \is_array($this->startInstanceList)) {
                $n = 0;
                foreach ($this->startInstanceList as $item) {
                    $res['StartInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upInstanceList) {
            $res['UpInstanceList'] = [];
            if (null !== $this->upInstanceList && \is_array($this->upInstanceList)) {
                $n = 0;
                foreach ($this->upInstanceList as $item) {
                    $res['UpInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDagInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownInstanceList'])) {
            if (!empty($map['DownInstanceList'])) {
                $model->downInstanceList = [];
                $n                       = 0;
                foreach ($map['DownInstanceList'] as $item) {
                    $model->downInstanceList[$n++] = null !== $item ? downInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartInstanceList'])) {
            if (!empty($map['StartInstanceList'])) {
                $model->startInstanceList = [];
                $n                        = 0;
                foreach ($map['StartInstanceList'] as $item) {
                    $model->startInstanceList[$n++] = null !== $item ? startInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpInstanceList'])) {
            if (!empty($map['UpInstanceList'])) {
                $model->upInstanceList = [];
                $n                     = 0;
                foreach ($map['UpInstanceList'] as $item) {
                    $model->upInstanceList[$n++] = null !== $item ? upInstanceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
