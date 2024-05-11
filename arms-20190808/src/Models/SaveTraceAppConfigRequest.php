<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigRequest\settings;
use AlibabaCloud\Tea\Model;

class SaveTraceAppConfigRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * Log on to the **ARMS console**. In the left-side navigation pane, choose **Application Monitoring** > **Applications**. On the **Applications** page, click the name of an application. The URL in the address bar contains the process ID (PID) of the application. The PID is indicated in the pid=xxx format. The PID is usually percent encoded as xxx%40xxx. You must modify this value to remove the percent encoding. For example, if the PID in the URL is eb4zdose6v%409781be0f44d\\*\\*\\*\\*, you must replace %40 with an at sign (@) to obtain eb4zdose6v@9781be0f44d\\*\\*\\*\\*.
     *
     * This parameter is required.
     * @example a2n80plglh@745eddxxx
     *
     * @var string
     */
    public $pid;

    /**
     * @description The settings of Application Monitoring.
     *
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
