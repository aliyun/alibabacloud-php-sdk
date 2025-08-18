<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\downInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\startInstanceList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo\upInstanceList;

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
        'downInstanceList' => 'DownInstanceList',
        'startInstanceList' => 'StartInstanceList',
        'upInstanceList' => 'UpInstanceList',
    ];

    public function validate()
    {
        if (\is_array($this->downInstanceList)) {
            Model::validateArray($this->downInstanceList);
        }
        if (\is_array($this->startInstanceList)) {
            Model::validateArray($this->startInstanceList);
        }
        if (\is_array($this->upInstanceList)) {
            Model::validateArray($this->upInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downInstanceList) {
            if (\is_array($this->downInstanceList)) {
                $res['DownInstanceList'] = [];
                $n1 = 0;
                foreach ($this->downInstanceList as $item1) {
                    $res['DownInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startInstanceList) {
            if (\is_array($this->startInstanceList)) {
                $res['StartInstanceList'] = [];
                $n1 = 0;
                foreach ($this->startInstanceList as $item1) {
                    $res['StartInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upInstanceList) {
            if (\is_array($this->upInstanceList)) {
                $res['UpInstanceList'] = [];
                $n1 = 0;
                foreach ($this->upInstanceList as $item1) {
                    $res['UpInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DownInstanceList'])) {
            if (!empty($map['DownInstanceList'])) {
                $model->downInstanceList = [];
                $n1 = 0;
                foreach ($map['DownInstanceList'] as $item1) {
                    $model->downInstanceList[$n1] = downInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartInstanceList'])) {
            if (!empty($map['StartInstanceList'])) {
                $model->startInstanceList = [];
                $n1 = 0;
                foreach ($map['StartInstanceList'] as $item1) {
                    $model->startInstanceList[$n1] = startInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpInstanceList'])) {
            if (!empty($map['UpInstanceList'])) {
                $model->upInstanceList = [];
                $n1 = 0;
                foreach ($map['UpInstanceList'] as $item1) {
                    $model->upInstanceList[$n1] = upInstanceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
