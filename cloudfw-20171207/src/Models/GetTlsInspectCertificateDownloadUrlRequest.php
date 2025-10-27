<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class GetTlsInspectCertificateDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $caCertId;
    protected $_name = [
        'caCertId' => 'CaCertId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertId) {
            $res['CaCertId'] = $this->caCertId;
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
        if (isset($map['CaCertId'])) {
            $model->caCertId = $map['CaCertId'];
        }

        return $model;
    }
}
