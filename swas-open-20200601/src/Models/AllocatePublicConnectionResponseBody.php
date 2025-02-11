<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class AllocatePublicConnectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $publicConnection;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'publicConnection' => 'PublicConnection',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicConnection) {
            $res['PublicConnection'] = $this->publicConnection;
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
        if (isset($map['PublicConnection'])) {
            $model->publicConnection = $map['PublicConnection'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
