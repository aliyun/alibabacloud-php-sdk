<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody\externalApplications;
use AlibabaCloud\Tea\Model;

class ListExternalApplicationsResponseBody extends Model
{
    /**
     * @description The information about the external applications.
     *
     * @var externalApplications
     */
    public $externalApplications;

    /**
     * @description Indicates whether the response is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * >  This parameter is returned only when `IsTruncated` is `true`.
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The request ID.
     *
     * @example 936E1D9C-157D-45BD-8A3B-81C0716EB077
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'externalApplications' => 'ExternalApplications',
        'isTruncated'          => 'IsTruncated',
        'marker'               => 'Marker',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalApplications) {
            $res['ExternalApplications'] = null !== $this->externalApplications ? $this->externalApplications->toMap() : null;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExternalApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalApplications'])) {
            $model->externalApplications = externalApplications::fromMap($map['ExternalApplications']);
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
