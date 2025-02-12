<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCacheConfigsResponseBody\domainCacheConfigs\customRules;

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
        if (\is_array($this->customRules)) {
            Model::validateArray($this->customRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRules) {
            if (\is_array($this->customRules)) {
                $res['CustomRules'] = [];
                $n1                 = 0;
                foreach ($this->customRules as $item1) {
                    $res['CustomRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomRules'])) {
            if (!empty($map['CustomRules'])) {
                $model->customRules = [];
                $n1                 = 0;
                foreach ($map['CustomRules'] as $item1) {
                    $model->customRules[$n1++] = customRules::fromMap($item1);
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
