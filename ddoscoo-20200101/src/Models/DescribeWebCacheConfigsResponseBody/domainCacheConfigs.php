<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs\customRules;
use AlibabaCloud\Tea\Model;

class domainCacheConfigs extends Model
{
    /**
     * @var customRules[]
     */
    public $customRules;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $enable;

    /**
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
