<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponse\SAMLProviders;
use AlibabaCloud\Tea\Model;

class ListSAMLProvidersResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var SAMLProviders
     */
    public $SAMLProviders;
    protected $_name = [
        'requestId'     => 'RequestId',
        'isTruncated'   => 'IsTruncated',
        'marker'        => 'Marker',
        'SAMLProviders' => 'SAMLProviders',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('SAMLProviders', $this->SAMLProviders, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->SAMLProviders) {
            $res['SAMLProviders'] = null !== $this->SAMLProviders ? $this->SAMLProviders->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSAMLProvidersResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['SAMLProviders'])) {
            $model->SAMLProviders = SAMLProviders::fromMap($map['SAMLProviders']);
        }

        return $model;
    }
}
