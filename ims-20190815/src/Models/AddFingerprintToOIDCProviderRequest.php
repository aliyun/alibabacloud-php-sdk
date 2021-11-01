<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class AddFingerprintToOIDCProviderRequest extends Model
{
    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'fingerprint'      => 'Fingerprint',
        'OIDCProviderName' => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFingerprintToOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
