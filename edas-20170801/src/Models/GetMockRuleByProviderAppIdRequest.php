<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetMockRuleByProviderAppIdRequest extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $providerAppId;
    protected $_name = [
        'region'        => 'Region',
        'providerAppId' => 'ProviderAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMockRuleByProviderAppIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }

        return $model;
    }
}
