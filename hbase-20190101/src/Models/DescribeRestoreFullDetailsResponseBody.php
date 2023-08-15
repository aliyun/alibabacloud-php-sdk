<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull;
use AlibabaCloud\Tea\Model;

class DescribeRestoreFullDetailsResponseBody extends Model
{
    /**
     * @example CFE525CF-C691-4140-A981-D004DAA7A840
     *
     * @var string
     */
    public $requestId;

    /**
     * @var restoreFull
     */
    public $restoreFull;
    protected $_name = [
        'requestId'   => 'RequestId',
        'restoreFull' => 'RestoreFull',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreFull) {
            $res['RestoreFull'] = null !== $this->restoreFull ? $this->restoreFull->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreFullDetailsResponseBody
     */
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
