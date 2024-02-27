<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UpdateCsrRequest extends Model
{
    /**
     * @description CSR ID。
     *
     * @example 5209
     *
     * @var int
     */
    public $csrId;

    /**
     * @example -----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'csrId' => 'CsrId',
        'key'   => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCsrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
