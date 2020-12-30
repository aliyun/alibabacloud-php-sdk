<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody\settingList\setting;
use AlibabaCloud\Tea\Model;

class settingList extends Model
{
    /**
     * @var setting[]
     */
    public $setting;
    protected $_name = [
        'setting' => 'Setting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->setting) {
            $res['Setting'] = [];
            if (null !== $this->setting && \is_array($this->setting)) {
                $n = 0;
                foreach ($this->setting as $item) {
                    $res['Setting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Setting'])) {
            if (!empty($map['Setting'])) {
                $model->setting = [];
                $n              = 0;
                foreach ($map['Setting'] as $item) {
                    $model->setting[$n++] = null !== $item ? setting::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
