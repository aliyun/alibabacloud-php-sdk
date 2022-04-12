<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetMockRuleByProviderAppIdRequest extends Model
{
    /**
     * @var string
     */
    public $providerAppId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'providerAppId' => 'ProviderAppId',
        'region'        => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->providerAppId) {
            $res['ProviderAppId'] = $this->providerAppId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['ProviderAppId'])) {
            $model->providerAppId = $map['ProviderAppId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
