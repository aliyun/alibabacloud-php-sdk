<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponseBody\data\pegInstanceInfoList;

class data extends Model
{
    /**
     * @var pegInstanceInfoList[]
     */
    public $pegInstanceInfoList;
    protected $_name = [
        'pegInstanceInfoList' => 'PegInstanceInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->pegInstanceInfoList)) {
            Model::validateArray($this->pegInstanceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pegInstanceInfoList) {
            if (\is_array($this->pegInstanceInfoList)) {
                $res['PegInstanceInfoList'] = [];
                $n1 = 0;
                foreach ($this->pegInstanceInfoList as $item1) {
                    $res['PegInstanceInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PegInstanceInfoList'])) {
            if (!empty($map['PegInstanceInfoList'])) {
                $model->pegInstanceInfoList = [];
                $n1 = 0;
                foreach ($map['PegInstanceInfoList'] as $item1) {
                    $model->pegInstanceInfoList[$n1++] = pegInstanceInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
