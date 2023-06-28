<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CertConfig extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $privateKey;
    protected $_name = [
        'certName'    => 'certName',
        'certificate' => 'certificate',
        'privateKey'  => 'privateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['certName'] = $this->certName;
        }
        if (null !== $this->certificate) {
            $res['certificate'] = $this->certificate;
        }
        if (null !== $this->privateKey) {
            $res['privateKey'] = $this->privateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certName'])) {
            $model->certName = $map['certName'];
        }
        if (isset($map['certificate'])) {
            $model->certificate = $map['certificate'];
        }
        if (isset($map['privateKey'])) {
            $model->privateKey = $map['privateKey'];
        }

        return $model;
    }
}
