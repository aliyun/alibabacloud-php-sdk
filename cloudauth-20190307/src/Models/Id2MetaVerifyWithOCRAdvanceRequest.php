<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class Id2MetaVerifyWithOCRAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $certFileObject;

    /**
     * @var Stream
     */
    public $certNationalFileObject;

    /**
     * @var string
     */
    public $certNationalUrl;

    /**
     * @var string
     */
    public $certUrl;
    protected $_name = [
        'certFileObject' => 'CertFile',
        'certNationalFileObject' => 'CertNationalFile',
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
        if (null !== $this->certFileObject) {
            $res['CertFile'] = $this->certFileObject;
        }

        if (null !== $this->certNationalFileObject) {
            $res['CertNationalFile'] = $this->certNationalFileObject;
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
            $model->certFileObject = $map['CertFile'];
        }

        if (isset($map['CertNationalFile'])) {
            $model->certNationalFileObject = $map['CertNationalFile'];
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
