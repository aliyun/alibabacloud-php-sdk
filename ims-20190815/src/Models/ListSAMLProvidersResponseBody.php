<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody\SAMLProviders;
use AlibabaCloud\Tea\Model;

class ListSAMLProvidersResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @example 2D8B70D3-E194-41C9-93C5-F6A10D716D24
     *
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLProviders
     */
    public $SAMLProviders;
    protected $_name = [
        'isTruncated'   => 'IsTruncated',
        'marker'        => 'Marker',
        'requestId'     => 'RequestId',
        'SAMLProviders' => 'SAMLProviders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SAMLProviders) {
            $res['SAMLProviders'] = null !== $this->SAMLProviders ? $this->SAMLProviders->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSAMLProvidersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SAMLProviders'])) {
            $model->SAMLProviders = SAMLProviders::fromMap($map['SAMLProviders']);
        }

        return $model;
    }
}
