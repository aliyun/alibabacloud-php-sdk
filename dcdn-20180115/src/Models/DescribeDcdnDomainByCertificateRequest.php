<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainByCertificateRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @example true
     *
     * @var bool
     */
    public $SSLStatus;
    protected $_name = [
        'SSLPub'    => 'SSLPub',
        'SSLStatus' => 'SSLStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->SSLStatus) {
            $res['SSLStatus'] = $this->SSLStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainByCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['SSLStatus'])) {
            $model->SSLStatus = $map['SSLStatus'];
        }

        return $model;
    }
}
