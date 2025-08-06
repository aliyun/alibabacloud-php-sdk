<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsResponseBody\materialList;

class AddEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @var materialList[]
     */
    public $materialList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'materialList' => 'MaterialList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->materialList)) {
            Model::validateArray($this->materialList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialList) {
            if (\is_array($this->materialList)) {
                $res['MaterialList'] = [];
                $n1 = 0;
                foreach ($this->materialList as $item1) {
                    $res['MaterialList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaterialList'])) {
            if (!empty($map['MaterialList'])) {
                $model->materialList = [];
                $n1 = 0;
                foreach ($map['MaterialList'] as $item1) {
                    $model->materialList[$n1] = materialList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
