<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceStatusStatisticRequest extends Model
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
     * @return GetInstanceStatusStatisticRequest
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
