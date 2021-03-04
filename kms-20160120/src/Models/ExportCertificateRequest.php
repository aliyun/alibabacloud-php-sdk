<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $passphrase;

    /**
     * @var string
     */
    public $exportFormat;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'passphrase'    => 'Passphrase',
        'exportFormat'  => 'ExportFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->passphrase) {
            $res['Passphrase'] = $this->passphrase;
        }
        if (null !== $this->exportFormat) {
            $res['ExportFormat'] = $this->exportFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Passphrase'])) {
            $model->passphrase = $map['Passphrase'];
        }
        if (isset($map['ExportFormat'])) {
            $model->exportFormat = $map['ExportFormat'];
        }

        return $model;
    }
}
