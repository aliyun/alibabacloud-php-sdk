<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResourceSummaryResponseBody\resourceSummary;
use AlibabaCloud\Tea\Model;

class GetProjectResourceSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceSummary
     */
    public $resourceSummary;
    protected $_name = [
        'requestId'       => 'requestId',
        'resourceSummary' => 'resourceSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceSummary) {
            $res['resourceSummary'] = null !== $this->resourceSummary ? $this->resourceSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectResourceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceSummary'])) {
            $model->resourceSummary = resourceSummary::fromMap($map['resourceSummary']);
        }

        return $model;
    }
}
