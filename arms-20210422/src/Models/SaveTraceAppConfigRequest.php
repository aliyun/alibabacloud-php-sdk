<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SaveTraceAppConfigRequest\settings;

class SaveTraceAppConfigRequest extends Model
{
    /**
     * @var string
     */
    public $pid;

    /**
     * @var settings[]
     */
    public $settings;
    protected $_name = [
        'pid' => 'Pid',
        'settings' => 'Settings',
    ];

    public function validate()
    {
        if (\is_array($this->settings)) {
            Model::validateArray($this->settings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->settings) {
            if (\is_array($this->settings)) {
                $res['Settings'] = [];
                $n1 = 0;
                foreach ($this->settings as $item1) {
                    $res['Settings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['Settings'])) {
            if (!empty($map['Settings'])) {
                $model->settings = [];
                $n1 = 0;
                foreach ($map['Settings'] as $item1) {
                    $model->settings[$n1] = settings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
