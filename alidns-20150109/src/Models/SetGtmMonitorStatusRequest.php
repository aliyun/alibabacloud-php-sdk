<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class SetGtmMonitorStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'lang' => 'Lang',
        'monitorConfigId' => 'MonitorConfigId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
