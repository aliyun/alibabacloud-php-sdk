<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponseBody\discoveredResourceSummary;
use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceSummaryResponseBody extends Model
{
    /**
     * @var discoveredResourceSummary
     */
    public $discoveredResourceSummary;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceSummary' => 'DiscoveredResourceSummary',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceSummary) {
            $res['DiscoveredResourceSummary'] = null !== $this->discoveredResourceSummary ? $this->discoveredResourceSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceSummary'])) {
            $model->discoveredResourceSummary = discoveredResourceSummary::fromMap($map['DiscoveredResourceSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
