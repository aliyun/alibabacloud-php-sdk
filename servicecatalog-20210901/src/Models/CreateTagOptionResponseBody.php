<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTagOptionResponseBody\tagOptionDetail;

class CreateTagOptionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagOptionDetail
     */
    public $tagOptionDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagOptionDetail' => 'TagOptionDetail',
    ];

    public function validate()
    {
        if (null !== $this->tagOptionDetail) {
            $this->tagOptionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagOptionDetail) {
            $res['TagOptionDetail'] = null !== $this->tagOptionDetail ? $this->tagOptionDetail->toArray($noStream) : $this->tagOptionDetail;
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

        if (isset($map['TagOptionDetail'])) {
            $model->tagOptionDetail = tagOptionDetail::fromMap($map['TagOptionDetail']);
        }

        return $model;
    }
}
