<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CertInfo extends Model
{
    /**
     * @var string
     */
    public $certBody;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certPrivatekey;
    protected $_name = [
        'certBody' => 'cert_body',
        'certName' => 'cert_name',
        'certPrivatekey' => 'cert_privatekey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
