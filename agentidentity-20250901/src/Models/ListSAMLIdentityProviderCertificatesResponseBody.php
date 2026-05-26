<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListSAMLIdentityProviderCertificatesResponseBody\x509Certificates;

class ListSAMLIdentityProviderCertificatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var x509Certificates[]
     */
    public $x509Certificates;
    protected $_name = [
        'requestId' => 'RequestId',
        'x509Certificates' => 'X509Certificates',
    ];

    public function validate()
    {
        if (\is_array($this->x509Certificates)) {
            Model::validateArray($this->x509Certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->x509Certificates) {
            if (\is_array($this->x509Certificates)) {
                $res['X509Certificates'] = [];
                $n1 = 0;
                foreach ($this->x509Certificates as $item1) {
                    $res['X509Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['X509Certificates'])) {
            if (!empty($map['X509Certificates'])) {
                $model->x509Certificates = [];
                $n1 = 0;
                foreach ($map['X509Certificates'] as $item1) {
                    $model->x509Certificates[$n1] = x509Certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
