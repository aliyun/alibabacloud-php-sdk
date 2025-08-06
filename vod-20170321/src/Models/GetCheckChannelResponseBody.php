<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCheckChannelResponseBody\audit;

class GetCheckChannelResponseBody extends Model
{
    /**
     * @var audit
     */
    public $audit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'audit' => 'Audit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->audit) {
            $this->audit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toArray($noStream) : $this->audit;
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
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
