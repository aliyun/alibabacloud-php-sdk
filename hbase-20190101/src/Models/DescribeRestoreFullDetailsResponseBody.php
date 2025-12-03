<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull;

class DescribeRestoreFullDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var restoreFull
     */
    public $restoreFull;
    protected $_name = [
        'requestId' => 'RequestId',
        'restoreFull' => 'RestoreFull',
    ];

    public function validate()
    {
        if (null !== $this->restoreFull) {
            $this->restoreFull->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreFull) {
            $res['RestoreFull'] = null !== $this->restoreFull ? $this->restoreFull->toArray($noStream) : $this->restoreFull;
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

        if (isset($map['RestoreFull'])) {
            $model->restoreFull = restoreFull::fromMap($map['RestoreFull']);
        }

        return $model;
    }
}
