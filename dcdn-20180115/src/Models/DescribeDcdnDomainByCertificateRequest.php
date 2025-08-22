<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnDomainByCertificateRequest extends Model
{
    /**
     * @var bool
     */
    public $exact;

    /**
     * @var string
     */
    public $SSLPub;

    /**
     * @var bool
     */
    public $SSLStatus;
    protected $_name = [
        'exact' => 'Exact',
        'SSLPub' => 'SSLPub',
        'SSLStatus' => 'SSLStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exact) {
            $res['Exact'] = $this->exact;
        }

        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }

        if (null !== $this->SSLStatus) {
            $res['SSLStatus'] = $this->SSLStatus;
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
        if (isset($map['Exact'])) {
            $model->exact = $map['Exact'];
        }

        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        if (isset($map['SSLStatus'])) {
            $model->SSLStatus = $map['SSLStatus'];
        }

        return $model;
    }
}
