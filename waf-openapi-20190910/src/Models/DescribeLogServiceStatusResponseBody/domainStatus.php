<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponseBody;

use AlibabaCloud\Dara\Model;

class domainStatus extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $slsLogActive;
    protected $_name = [
        'domain' => 'Domain',
        'slsLogActive' => 'SlsLogActive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->slsLogActive) {
            $res['SlsLogActive'] = $this->slsLogActive;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['SlsLogActive'])) {
            $model->slsLogActive = $map['SlsLogActive'];
        }

        return $model;
    }
}
