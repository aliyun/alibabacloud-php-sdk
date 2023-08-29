<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\ProduceAikcertResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AAAJ8Cmk********CWWemg==
     *
     * @var string
     */
    public $dataCredentialBlob;

    /**
     * @example utzA3gAA********eVEpFNs=
     *
     * @var string
     */
    public $keyCredentialBlob;
    protected $_name = [
        'dataCredentialBlob' => 'DataCredentialBlob',
        'keyCredentialBlob'  => 'KeyCredentialBlob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCredentialBlob) {
            $res['DataCredentialBlob'] = $this->dataCredentialBlob;
        }
        if (null !== $this->keyCredentialBlob) {
            $res['KeyCredentialBlob'] = $this->keyCredentialBlob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCredentialBlob'])) {
            $model->dataCredentialBlob = $map['DataCredentialBlob'];
        }
        if (isset($map['KeyCredentialBlob'])) {
            $model->keyCredentialBlob = $map['KeyCredentialBlob'];
        }

        return $model;
    }
}
