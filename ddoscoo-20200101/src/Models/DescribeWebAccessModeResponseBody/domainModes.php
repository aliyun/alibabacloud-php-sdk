<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAccessModeResponseBody;

use AlibabaCloud\Tea\Model;

class domainModes extends Model
{
    /**
     * @description The mode in which the website service is added. Valid values:
     *
     *   **0**: A record
     *   **1**: anti-DDoS mode
     *   **2**: origin redundancy mode
     *
     * @example 0
     *
     * @var int
     */
    public $accessMode;

    /**
     * @description The domain name of the website.
     *
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
     * @return domainModes
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
