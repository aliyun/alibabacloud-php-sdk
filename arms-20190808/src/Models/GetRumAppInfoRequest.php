<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetRumAppInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appGroup;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appGroup'  => 'AppGroup',
        'pid'       => 'Pid',
        'regionId'  => 'RegionId',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
