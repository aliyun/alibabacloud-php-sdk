<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAccessModeResponseBody;

use AlibabaCloud\Tea\Model;

class domainModeList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accessMode;

    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'domain'     => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainModeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
