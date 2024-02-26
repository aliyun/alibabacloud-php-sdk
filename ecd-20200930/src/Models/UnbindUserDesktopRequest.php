<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UnbindUserDesktopRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopAgentIds;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $userDesktopIds;
    protected $_name = [
        'desktopAgentIds' => 'DesktopAgentIds',
        'desktopGroupId'  => 'DesktopGroupId',
        'desktopIds'      => 'DesktopIds',
        'force'           => 'Force',
        'reason'          => 'Reason',
        'userDesktopIds'  => 'UserDesktopIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAgentIds) {
            $res['DesktopAgentIds'] = $this->desktopAgentIds;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopIds) {
            $res['DesktopIds'] = $this->desktopIds;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->userDesktopIds) {
            $res['UserDesktopIds'] = $this->userDesktopIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindUserDesktopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAgentIds'])) {
            if (!empty($map['DesktopAgentIds'])) {
                $model->desktopAgentIds = $map['DesktopAgentIds'];
            }
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = $map['DesktopIds'];
            }
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['UserDesktopIds'])) {
            if (!empty($map['UserDesktopIds'])) {
                $model->userDesktopIds = $map['UserDesktopIds'];
            }
        }

        return $model;
    }
}
