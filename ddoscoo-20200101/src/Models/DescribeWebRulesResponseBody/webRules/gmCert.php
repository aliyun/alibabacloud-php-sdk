<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;

use AlibabaCloud\Dara\Model;

class gmCert extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @var int
     */
    public $gmEnable;

    /**
     * @var int
     */
    public $gmOnly;
    protected $_name = [
        'certId' => 'CertId',
        'gmEnable' => 'GmEnable',
        'gmOnly' => 'GmOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
