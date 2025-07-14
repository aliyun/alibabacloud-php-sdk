<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretRequest;

use AlibabaCloud\Tea\Model;

class secretData extends Model
{
    /**
     * @description The information about the key-value pairs of the Secret. This parameter is required. The following formats are supported:
     *
     * {"Data":"{"k1":"v1", "k2":"v2"}"}
     *
     * k specifies a key and v specifies a value. For more information, see [Manage a Kubernetes Secret](https://help.aliyun.com/document_detail/463383.html).
     *
     * This parameter is required.
     *
     * @example {".dockerconfigjson":"eyJhdXRocyI6eyJyZWdpc3RyeS12cGMuY24tYmVpamluZy5hbGl5dW5jcy5jb20iOnsidXNlcm5hbWUiOiJ1c2VybmFtZSIsInBhc3N3b3JkIjoicGFzc3dvcmQiLCJhdXRoIjoiZFhObGNtNWhiV1U2Y0dGemMzZHZjbVE9In0sInJlZ2lzdHJ5LmNuLWJlaWppbmcuYWxpeXVuY3MuY29tIjp7InVzZXJuYW1lIjoidXNlcm5hbWUiLCJwYXNzd29yZCI6InBhc3N3b3JkIiwiYXV0aCI6ImRYTmxjbTVoYldVNmNHRnpjM2R2Y21RPSJ9fX0="}
     *
     * @var string
     */
    public $secretData;
    protected $_name = [
        'secretData' => 'SecretData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }

        return $model;
    }
}
