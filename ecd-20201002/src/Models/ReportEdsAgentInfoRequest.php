<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class ReportEdsAgentInfoRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $edsAgentInfo;
    protected $_name = [
        'aliUid' => 'AliUid',
        'desktopId' => 'DesktopId',
        'ecsInstanceId' => 'EcsInstanceId',
        'edsAgentInfo' => 'EdsAgentInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }

        if (null !== $this->edsAgentInfo) {
            $res['EdsAgentInfo'] = $this->edsAgentInfo;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }

        if (isset($map['EdsAgentInfo'])) {
            $model->edsAgentInfo = $map['EdsAgentInfo'];
        }

        return $model;
    }
}
