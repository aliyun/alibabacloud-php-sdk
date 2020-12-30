<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class DisableTrunkProvidersRequest extends Model
{
    /**
     * @var string[]
     */
    public $providerName;
    protected $_name = [
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableTrunkProvidersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProviderName'])) {
            if (!empty($map['ProviderName'])) {
                $model->providerName = $map['ProviderName'];
            }
        }

        return $model;
    }
}
