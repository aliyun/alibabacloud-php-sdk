<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetBizTraceResponseBody extends Model
{
    /**
     * @var BizTraceConfig
     */
    public $item;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'item' => 'item',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->item) {
            $this->item->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            $res['item'] = null !== $this->item ? $this->item->toArray($noStream) : $this->item;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['item'])) {
            $model->item = BizTraceConfig::fromMap($map['item']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
