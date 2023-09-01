<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CertInfo extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $certBody;

    /**
     * @example xxx
     *
     * @var string
     */
    public $certName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $certPrivatekey;
    protected $_name = [
        'certBody'       => 'cert_body',
        'certName'       => 'cert_name',
        'certPrivatekey' => 'cert_privatekey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certBody) {
            $res['cert_body'] = $this->certBody;
        }
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }
        if (null !== $this->certPrivatekey) {
            $res['cert_privatekey'] = $this->certPrivatekey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_body'])) {
            $model->certBody = $map['cert_body'];
        }
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }
        if (isset($map['cert_privatekey'])) {
            $model->certPrivatekey = $map['cert_privatekey'];
        }

        return $model;
    }
}
