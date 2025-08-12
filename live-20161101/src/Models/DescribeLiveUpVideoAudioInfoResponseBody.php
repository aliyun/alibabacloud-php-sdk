<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems;

class DescribeLiveUpVideoAudioInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var upItems
     */
    public $upItems;
    protected $_name = [
        'requestId' => 'RequestId',
        'upItems' => 'UpItems',
    ];

    public function validate()
    {
        if (null !== $this->upItems) {
            $this->upItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->upItems) {
            $res['UpItems'] = null !== $this->upItems ? $this->upItems->toArray($noStream) : $this->upItems;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpItems'])) {
            $model->upItems = upItems::fromMap($map['UpItems']);
        }

        return $model;
    }
}
