<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceStatusCountRequest extends Model
{
    /**
     * @description The data timestamp of instances.
     *
     * This parameter is required.
     * @example 2020-01-01
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The runtime environment. Valid values: PROD and DEV.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The workspace ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'bizDate'    => 'BizDate',
        'projectEnv' => 'ProjectEnv',
        'projectId'  => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
