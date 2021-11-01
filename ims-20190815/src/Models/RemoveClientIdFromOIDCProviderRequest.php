<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class RemoveClientIdFromOIDCProviderRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'clientId'         => 'ClientId',
        'OIDCProviderName' => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveClientIdFromOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
