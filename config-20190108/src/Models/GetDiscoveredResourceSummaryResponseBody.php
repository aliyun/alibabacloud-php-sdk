<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponseBody\discoveredResourceSummary;
use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var discoveredResourceSummary
     */
    public $discoveredResourceSummary;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'discoveredResourceSummary' => 'DiscoveredResourceSummary',
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
        if (null !== $this->discoveredResourceSummary) {
            $res['DiscoveredResourceSummary'] = null !== $this->discoveredResourceSummary ? $this->discoveredResourceSummary->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscoveredResourceSummary'])) {
            $model->discoveredResourceSummary = discoveredResourceSummary::fromMap($map['DiscoveredResourceSummary']);
        }

        return $model;
    }
}
