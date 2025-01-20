<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy;

use AlibabaCloud\Dara\Model;

class tls extends Model
{
    /**
     * @var string
     */
    public $caCertContent;
    /**
     * @var string
     */
    public $caCertId;
    /**
     * @var string
     */
    public $certId;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $sni;
    /**
     * @var string[]
     */
    public $subjectAltNames;
    protected $_name = [
        'caCertContent'   => 'CaCertContent',
        'caCertId'        => 'CaCertId',
        'certId'          => 'CertId',
        'mode'            => 'Mode',
        'sni'             => 'Sni',
        'subjectAltNames' => 'SubjectAltNames',
    ];

    public function validate()
    {
        if (\is_array($this->subjectAltNames)) {
            Model::validateArray($this->subjectAltNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertContent) {
            $res['CaCertContent'] = $this->caCertContent;
        }

        if (null !== $this->caCertId) {
            $res['CaCertId'] = $this->caCertId;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->sni) {
            $res['Sni'] = $this->sni;
        }

        if (null !== $this->subjectAltNames) {
            if (\is_array($this->subjectAltNames)) {
                $res['SubjectAltNames'] = [];
                $n1                     = 0;
                foreach ($this->subjectAltNames as $item1) {
                    $res['SubjectAltNames'][$n1++] = $item1;
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
        if (isset($map['CaCertContent'])) {
            $model->caCertContent = $map['CaCertContent'];
        }

        if (isset($map['CaCertId'])) {
            $model->caCertId = $map['CaCertId'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Sni'])) {
            $model->sni = $map['Sni'];
        }

        if (isset($map['SubjectAltNames'])) {
            if (!empty($map['SubjectAltNames'])) {
                $model->subjectAltNames = [];
                $n1                     = 0;
                foreach ($map['SubjectAltNames'] as $item1) {
                    $model->subjectAltNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
