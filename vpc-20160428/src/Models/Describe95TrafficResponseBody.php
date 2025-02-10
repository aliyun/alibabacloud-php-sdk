<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary;

class Describe95TrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var traffic95Summary
     */
    public $traffic95Summary;
    protected $_name = [
        'requestId'        => 'RequestId',
        'traffic95Summary' => 'Traffic95Summary',
    ];

    public function validate()
    {
        if (null !== $this->traffic95Summary) {
            $this->traffic95Summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traffic95Summary) {
            $res['Traffic95Summary'] = null !== $this->traffic95Summary ? $this->traffic95Summary->toArray($noStream) : $this->traffic95Summary;
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

        if (isset($map['Traffic95Summary'])) {
            $model->traffic95Summary = traffic95Summary::fromMap($map['Traffic95Summary']);
        }

        return $model;
    }
}
