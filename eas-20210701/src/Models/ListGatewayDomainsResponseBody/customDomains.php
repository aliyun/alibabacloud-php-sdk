<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class customDomains extends Model
{
    /**
     * @description The ID of the SSL certificate bound to the domain name. Obtain the certificate ID after you upload or purchase a certificate in the [Certificate Management Service](https://yundunnext.console.aliyun.com/?spm=5176.2020520163.console-base_help.2.4b3baJixaJixOc\\&p=cas) console.
     *
     * @example 1473**25
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The custom domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The domain name type.
     *
     * Valid value:
     *
     *   intranet: internal network.
     *   internet: public network.
     *
     * @example intranet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'domain'        => 'Domain',
        'type'          => 'Type',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customDomains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
