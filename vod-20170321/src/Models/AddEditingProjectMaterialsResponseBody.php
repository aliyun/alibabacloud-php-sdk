<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectMaterialsResponseBody\materialList;
use AlibabaCloud\Tea\Model;

class AddEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @var materialList[]
     */
    public $materialList;

    /**
     * @example 85237CDA-0B54-5CED-BA10-A8A71AA13C1A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'materialList' => 'MaterialList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialList) {
            $res['MaterialList'] = [];
            if (null !== $this->materialList && \is_array($this->materialList)) {
                $n = 0;
                foreach ($this->materialList as $item) {
                    $res['MaterialList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEditingProjectMaterialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialList'])) {
            if (!empty($map['MaterialList'])) {
                $model->materialList = [];
                $n                   = 0;
                foreach ($map['MaterialList'] as $item) {
                    $model->materialList[$n++] = null !== $item ? materialList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
