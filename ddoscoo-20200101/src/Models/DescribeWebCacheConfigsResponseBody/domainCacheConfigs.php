<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs\customRules;
use AlibabaCloud\Tea\Model;

class domainCacheConfigs extends Model
{
    /**
     * @description An array that consists of custom caching rules.
     *
     * @var customRules[]
     */
    public $customRules;

    /**
     * @description The domain name of the website.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The status of the Static Page Caching policy. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @description The cache mode. Valid values:
     *
     *   **standard**: The standard cache mode is used.
     *   **aggressive**: The enhanced cache mode is used.
     *   **bypass**: No data is cached.
     *
     * @example bypass
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'customRules' => 'CustomRules',
        'domain'      => 'Domain',
        'enable'      => 'Enable',
        'mode'        => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customRules) {
            $res['CustomRules'] = [];
            if (null !== $this->customRules && \is_array($this->customRules)) {
                $n = 0;
                foreach ($this->customRules as $item) {
                    $res['CustomRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainCacheConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomRules'])) {
            if (!empty($map['CustomRules'])) {
                $model->customRules = [];
                $n                  = 0;
                foreach ($map['CustomRules'] as $item) {
                    $model->customRules[$n++] = null !== $item ? customRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
