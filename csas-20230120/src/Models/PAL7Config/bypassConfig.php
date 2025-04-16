<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\bypassConfig\urlBypassRules;

class bypassConfig extends Model
{
    /**
     * @var string[]
     */
    public $appBypassFroms;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var urlBypassRules[]
     */
    public $urlBypassRules;
    protected $_name = [
        'appBypassFroms' => 'AppBypassFroms',
        'mode' => 'Mode',
        'urlBypassRules' => 'UrlBypassRules',
    ];

    public function validate()
    {
        if (\is_array($this->appBypassFroms)) {
            Model::validateArray($this->appBypassFroms);
        }
        if (\is_array($this->urlBypassRules)) {
            Model::validateArray($this->urlBypassRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appBypassFroms) {
            if (\is_array($this->appBypassFroms)) {
                $res['AppBypassFroms'] = [];
                $n1 = 0;
                foreach ($this->appBypassFroms as $item1) {
                    $res['AppBypassFroms'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->urlBypassRules) {
            if (\is_array($this->urlBypassRules)) {
                $res['UrlBypassRules'] = [];
                $n1 = 0;
                foreach ($this->urlBypassRules as $item1) {
                    $res['UrlBypassRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AppBypassFroms'])) {
            if (!empty($map['AppBypassFroms'])) {
                $model->appBypassFroms = [];
                $n1 = 0;
                foreach ($map['AppBypassFroms'] as $item1) {
                    $model->appBypassFroms[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['UrlBypassRules'])) {
            if (!empty($map['UrlBypassRules'])) {
                $model->urlBypassRules = [];
                $n1 = 0;
                foreach ($map['UrlBypassRules'] as $item1) {
                    $model->urlBypassRules[$n1++] = urlBypassRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
