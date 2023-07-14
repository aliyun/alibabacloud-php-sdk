<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigRequest\settings;
use AlibabaCloud\Tea\Model;

class SaveTraceAppConfigRequest extends Model
{
    /**
     * @example a2n80plglh@745eddxxx
     *
     * @var string
     */
    public $pid;

    /**
     * @var settings[]
     */
    public $settings;
    protected $_name = [
        'pid'      => 'Pid',
        'settings' => 'Settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->settings) {
            $res['Settings'] = [];
            if (null !== $this->settings && \is_array($this->settings)) {
                $n = 0;
                foreach ($this->settings as $item) {
                    $res['Settings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTraceAppConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Settings'])) {
            if (!empty($map['Settings'])) {
                $model->settings = [];
                $n               = 0;
                foreach ($map['Settings'] as $item) {
                    $model->settings[$n++] = null !== $item ? settings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
