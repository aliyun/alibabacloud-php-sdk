<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'desktopGroupId' => 'DesktopGroupId',
        'desktopIds' => 'DesktopIds',
        'force' => 'Force',
        'reason' => 'Reason',
        'userDesktopIds' => 'UserDesktopIds',
    ];

    public function validate()
    {
        if (\is_array($this->desktopAgentIds)) {
            Model::validateArray($this->desktopAgentIds);
        }
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        if (\is_array($this->userDesktopIds)) {
            Model::validateArray($this->userDesktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopAgentIds) {
            if (\is_array($this->desktopAgentIds)) {
                $res['DesktopAgentIds'] = [];
                $n1 = 0;
                foreach ($this->desktopAgentIds as $item1) {
                    $res['DesktopAgentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->userDesktopIds) {
            if (\is_array($this->userDesktopIds)) {
                $res['UserDesktopIds'] = [];
                $n1 = 0;
                foreach ($this->userDesktopIds as $item1) {
                    $res['UserDesktopIds'][$n1] = $item1;
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
        if (isset($map['DesktopAgentIds'])) {
            if (!empty($map['DesktopAgentIds'])) {
                $model->desktopAgentIds = [];
                $n1 = 0;
                foreach ($map['DesktopAgentIds'] as $item1) {
                    $model->desktopAgentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->userDesktopIds = [];
                $n1 = 0;
                foreach ($map['UserDesktopIds'] as $item1) {
                    $model->userDesktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
