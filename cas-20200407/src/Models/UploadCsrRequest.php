<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadCsrRequest extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @example -----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $key;

    /**
     * @example name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'csr'  => 'Csr',
        'key'  => 'Key',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCsrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
