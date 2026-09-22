<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListZonesResponseBody\listZonesModel;

class ListZonesResponseBody extends Model
{
    /**
     * @var listZonesModel
     */
    public $listZonesModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'listZonesModel' => 'ListZonesModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->listZonesModel) {
            $this->listZonesModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listZonesModel) {
            $res['ListZonesModel'] = null !== $this->listZonesModel ? $this->listZonesModel->toArray($noStream) : $this->listZonesModel;
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
        if (isset($map['ListZonesModel'])) {
            $model->listZonesModel = listZonesModel::fromMap($map['ListZonesModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
