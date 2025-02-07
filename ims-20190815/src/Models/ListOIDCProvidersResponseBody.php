<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListOIDCProvidersResponseBody\OIDCProviders;

class ListOIDCProvidersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;
    /**
     * @var string
     */
    public $marker;
    /**
     * @var OIDCProviders
     */
    public $OIDCProviders;
    /**
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
        if (null !== $this->OIDCProviders) {
            $this->OIDCProviders->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->OIDCProviders) {
            $res['OIDCProviders'] = null !== $this->OIDCProviders ? $this->OIDCProviders->toArray($noStream) : $this->OIDCProviders;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
