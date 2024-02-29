<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary;
use AlibabaCloud\Tea\Model;

class Describe95TrafficResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information returned.
     *
     * @var traffic95Summary
     */
    public $traffic95Summary;
    protected $_name = [
        'requestId'        => 'RequestId',
        'traffic95Summary' => 'Traffic95Summary',
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
        if (null !== $this->traffic95Summary) {
            $res['Traffic95Summary'] = null !== $this->traffic95Summary ? $this->traffic95Summary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Describe95TrafficResponseBody
     */
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
