<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList;
use AlibabaCloud\Tea\Model;

class GetEditingProjectMaterialsResponseBody extends Model
{
    /**
     * @var materialList
     */
    public $materialList;

    /**
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
            $res['MaterialList'] = null !== $this->materialList ? $this->materialList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEditingProjectMaterialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialList'])) {
            $model->materialList = materialList::fromMap($map['MaterialList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
