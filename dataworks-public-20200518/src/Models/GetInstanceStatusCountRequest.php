<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceStatusCountRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var string
     */
    public $bizDate;
    protected $_name = [
        'projectId'  => 'ProjectId',
        'projectEnv' => 'ProjectEnv',
        'bizDate'    => 'BizDate',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('bizDate', $this->bizDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceStatusCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        return $model;
    }
}
