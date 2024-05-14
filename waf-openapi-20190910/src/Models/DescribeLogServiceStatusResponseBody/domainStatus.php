<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeLogServiceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class domainStatus extends Model
{
    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1
     *
     * @var int
     */
    public $slsLogActive;
    protected $_name = [
        'domain'       => 'Domain',
        'slsLogActive' => 'SlsLogActive',
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
        if (null !== $this->slsLogActive) {
            $res['SlsLogActive'] = $this->slsLogActive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainStatus
     */
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
