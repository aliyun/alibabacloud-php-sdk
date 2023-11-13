<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebAccessModeRequest extends Model
{
    /**
     * @description The mode in which a website service is added to Anti-DDoS Pro or Anti-DDoS Premium. Valid values:
     *
     *   **0**: A record mode
     *   **1**: anti-DDoS mode
     *   **2**: origin redundancy mode
     *
     * @example 2
     *
     * @var int
     */
    public $accessMode;

    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
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
     * @return ModifyWebAccessModeRequest
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
