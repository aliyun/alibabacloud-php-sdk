<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyOcspStatusRequest extends Model
{
    /**
     * @description The domain name for which you want to configure the Static Page Caching policy.
     *
     * > You can call the [DescribeDomains](~~91724~~) operation to query all the domain names that are added to Anti-DDoS Pro or Anti-DDoS Premium.
     * @example click.linktech.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to enable the OCSP feature. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @var int
     */
    public $enable;
    protected $_name = [
        'domain' => 'Domain',
        'enable' => 'Enable',
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
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOcspStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
