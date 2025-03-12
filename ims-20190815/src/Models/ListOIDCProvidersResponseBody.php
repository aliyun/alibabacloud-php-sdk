<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody\OIDCProviders;
use AlibabaCloud\Tea\Model;

class ListOIDCProvidersResponseBody extends Model
{
    /**
     * @description Indicates whether the response is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The `marker`. This parameter is returned only if the value of `IsTruncated` is `true`. If the parameter is returned, you can call this operation again and set this parameter to obtain the truncated part.``
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The information about the OIDC IdP.
     *
     * @var OIDCProviders
     */
    public $OIDCProviders;

    /**
     * @description The request ID.
     *
     * @example D2148337-B86A-57F0-8B31-EB7BE0125226
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isTruncated'   => 'IsTruncated',
        'marker'        => 'Marker',
        'OIDCProviders' => 'OIDCProviders',
        'requestId'     => 'RequestId',
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
        if (null !== $this->OIDCProviders) {
            $res['OIDCProviders'] = null !== $this->OIDCProviders ? $this->OIDCProviders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOIDCProvidersResponseBody
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
        if (isset($map['OIDCProviders'])) {
            $model->OIDCProviders = OIDCProviders::fromMap($map['OIDCProviders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
