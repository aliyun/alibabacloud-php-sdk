<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetTemplateMaterialsResponseBody extends Model
{
    /**
     * @var string
     */
    public $materialUrls;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'materialUrls' => 'MaterialUrls',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->materialUrls) {
            $res['MaterialUrls'] = $this->materialUrls;
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
        if (isset($map['MaterialUrls'])) {
            $model->materialUrls = $map['MaterialUrls'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
