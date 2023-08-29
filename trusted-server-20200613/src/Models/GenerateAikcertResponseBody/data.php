<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\GenerateAikcertResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataCredentialBlob;

    /**
     * @var string
     */
    public $keyCredentialBlob;
    protected $_name = [
        'dataCredentialBlob' => 'dataCredentialBlob',
        'keyCredentialBlob'  => 'keyCredentialBlob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCredentialBlob) {
            $res['dataCredentialBlob'] = $this->dataCredentialBlob;
        }
        if (null !== $this->keyCredentialBlob) {
            $res['keyCredentialBlob'] = $this->keyCredentialBlob;
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
        if (isset($map['dataCredentialBlob'])) {
            $model->dataCredentialBlob = $map['dataCredentialBlob'];
        }
        if (isset($map['keyCredentialBlob'])) {
            $model->keyCredentialBlob = $map['keyCredentialBlob'];
        }

        return $model;
    }
}
