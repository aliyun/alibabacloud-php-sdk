<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\AssociateAdditionalCertificatesWithListenerRequest;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @description The domain name that is specified by the certificate. You can associate each domain name with only one additional certificate.
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the certificate. Only server certificates are supported.
     *
     * This parameter is required.
     * @example 6092**-cn-hangzhou
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'domain' => 'Domain',
        'id'     => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
