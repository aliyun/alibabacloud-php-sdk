<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->materialList) {
            $this->materialList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialList) {
            $res['MaterialList'] = null !== $this->materialList ? $this->materialList->toArray($noStream) : $this->materialList;
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
            $model->materialList = materialList::fromMap($map['MaterialList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
