<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;

use AlibabaCloud\Tea\Model;

class gmCert extends Model
{
    /**
     * @description The ID of the SM certificate.
     *
     * @example 725****
     *
     * @var string
     */
    public $certId;

    /**
     * @description Indicates whether Enable SM Certificate-based Verification is turned on.
     *
     *   0: no
     *   1: yes
     *
     * @example 1
     *
     * @var int
     */
    public $gmEnable;

    /**
     * @description Indicates whether Allow Access Only from SM Certificates-based Clients is turned on.
     *
     *   0: no
     *   1: yes
     *
     * @example 1
     *
     * @var int
     */
    public $gmOnly;
    protected $_name = [
        'certId'   => 'CertId',
        'gmEnable' => 'GmEnable',
        'gmOnly'   => 'GmOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->gmEnable) {
            $res['GmEnable'] = $this->gmEnable;
        }
        if (null !== $this->gmOnly) {
            $res['GmOnly'] = $this->gmOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gmCert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['GmEnable'])) {
            $model->gmEnable = $map['GmEnable'];
        }
        if (isset($map['GmOnly'])) {
            $model->gmOnly = $map['GmOnly'];
        }

        return $model;
    }
}
