<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListTrunkProvidersResponseBody;

use AlibabaCloud\Tea\Model;

class trunkProviders extends Model
{
    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'providerName' => 'ProviderName',
        'status'       => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trunkProviders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
