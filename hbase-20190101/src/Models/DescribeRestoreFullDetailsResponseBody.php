<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull;
use AlibabaCloud\Tea\Model;

class DescribeRestoreFullDetailsResponseBody extends Model
{
    /**
     * @var restoreFull
     */
    public $restoreFull;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'restoreFull' => 'RestoreFull',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreFull) {
            $res['RestoreFull'] = null !== $this->restoreFull ? $this->restoreFull->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RestoreFull'])) {
            $model->restoreFull = restoreFull::fromMap($map['RestoreFull']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
