<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class Id3MetaVerifyWithOCRRequest extends Model
{
    /**
     * @var string
     */
    public $certFile;

    /**
     * @var string
     */
    public $certNationalFile;

    /**
     * @var string
     */
    public $certNationalUrl;

    /**
     * @var string
     */
    public $certUrl;
    protected $_name = [
        'certFile' => 'CertFile',
        'certNationalFile' => 'CertNationalFile',
        'certNationalUrl' => 'CertNationalUrl',
        'certUrl' => 'CertUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certFile) {
            $res['CertFile'] = $this->certFile;
        }

        if (null !== $this->certNationalFile) {
            $res['CertNationalFile'] = $this->certNationalFile;
        }

        if (null !== $this->certNationalUrl) {
            $res['CertNationalUrl'] = $this->certNationalUrl;
        }

        if (null !== $this->certUrl) {
            $res['CertUrl'] = $this->certUrl;
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
        if (isset($map['CertFile'])) {
            $model->certFile = $map['CertFile'];
        }

        if (isset($map['CertNationalFile'])) {
            $model->certNationalFile = $map['CertNationalFile'];
        }

        if (isset($map['CertNationalUrl'])) {
            $model->certNationalUrl = $map['CertNationalUrl'];
        }

        if (isset($map['CertUrl'])) {
            $model->certUrl = $map['CertUrl'];
        }

        return $model;
    }
}
