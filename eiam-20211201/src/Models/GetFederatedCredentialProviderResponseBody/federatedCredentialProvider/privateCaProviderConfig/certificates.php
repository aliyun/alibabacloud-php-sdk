<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderResponseBody\federatedCredentialProvider\privateCaProviderConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderResponseBody\federatedCredentialProvider\privateCaProviderConfig\certificates\certificateMetadata;

class certificates extends Model
{
    /**
     * @var certificateMetadata
     */
    public $certificateMetadata;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fingerprint;
    protected $_name = [
        'certificateMetadata' => 'CertificateMetadata',
        'content' => 'Content',
        'fingerprint' => 'Fingerprint',
    ];

    public function validate()
    {
        if (null !== $this->certificateMetadata) {
            $this->certificateMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateMetadata) {
            $res['CertificateMetadata'] = null !== $this->certificateMetadata ? $this->certificateMetadata->toArray($noStream) : $this->certificateMetadata;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
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
        if (isset($map['CertificateMetadata'])) {
            $model->certificateMetadata = certificateMetadata::fromMap($map['CertificateMetadata']);
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }

        return $model;
    }
}
