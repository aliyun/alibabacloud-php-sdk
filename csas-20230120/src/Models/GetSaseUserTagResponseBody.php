<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetSaseUserTagResponseBody\saseUserTag;

class GetSaseUserTagResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var saseUserTag
     */
    public $saseUserTag;
    protected $_name = [
        'requestId' => 'RequestId',
        'saseUserTag' => 'SaseUserTag',
    ];

    public function validate()
    {
        if (null !== $this->saseUserTag) {
            $this->saseUserTag->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->saseUserTag) {
            $res['SaseUserTag'] = null !== $this->saseUserTag ? $this->saseUserTag->toArray($noStream) : $this->saseUserTag;
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

        if (isset($map['SaseUserTag'])) {
            $model->saseUserTag = saseUserTag::fromMap($map['SaseUserTag']);
        }

        return $model;
    }
}
