<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerSandboxVolumeMount;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerSandboxVolumeMount\agenticFs\mountPoints;

class agenticFs extends Model
{
    /**
     * @var int
     */
    public $groupID;

    /**
     * @var mountPoints[]
     */
    public $mountPoints;

    /**
     * @var int
     */
    public $userID;
    protected $_name = [
        'groupID' => 'groupID',
        'mountPoints' => 'mountPoints',
        'userID' => 'userID',
    ];

    public function validate()
    {
        if (\is_array($this->mountPoints)) {
            Model::validateArray($this->mountPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupID) {
            $res['groupID'] = $this->groupID;
        }

        if (null !== $this->mountPoints) {
            if (\is_array($this->mountPoints)) {
                $res['mountPoints'] = [];
                $n1 = 0;
                foreach ($this->mountPoints as $item1) {
                    $res['mountPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
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
        if (isset($map['groupID'])) {
            $model->groupID = $map['groupID'];
        }

        if (isset($map['mountPoints'])) {
            if (!empty($map['mountPoints'])) {
                $model->mountPoints = [];
                $n1 = 0;
                foreach ($map['mountPoints'] as $item1) {
                    $model->mountPoints[$n1] = mountPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
