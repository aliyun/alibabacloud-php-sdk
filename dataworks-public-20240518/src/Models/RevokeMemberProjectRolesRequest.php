<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RevokeMemberProjectRolesRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $roleCodes;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'roleCodes' => 'RoleCodes',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['RoleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['RoleCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['RoleCodes'] as $item1) {
                    $model->roleCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
