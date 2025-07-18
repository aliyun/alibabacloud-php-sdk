<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\bypassConfig\urlBypassRules;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appBypassFroms) {
            $res['AppBypassFroms'] = $this->appBypassFroms;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->urlBypassRules) {
            $res['UrlBypassRules'] = [];
            if (null !== $this->urlBypassRules && \is_array($this->urlBypassRules)) {
                $n = 0;
                foreach ($this->urlBypassRules as $item) {
                    $res['UrlBypassRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bypassConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppBypassFroms'])) {
            if (!empty($map['AppBypassFroms'])) {
                $model->appBypassFroms = $map['AppBypassFroms'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['UrlBypassRules'])) {
            if (!empty($map['UrlBypassRules'])) {
                $model->urlBypassRules = [];
                $n = 0;
                foreach ($map['UrlBypassRules'] as $item) {
                    $model->urlBypassRules[$n++] = null !== $item ? urlBypassRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
