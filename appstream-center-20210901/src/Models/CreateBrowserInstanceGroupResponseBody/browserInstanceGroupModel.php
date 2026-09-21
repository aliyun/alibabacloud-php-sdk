<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupResponseBody;

use AlibabaCloud\Dara\Model;

class browserInstanceGroupModel extends Model
{
    /**
     * @var string
     */
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
