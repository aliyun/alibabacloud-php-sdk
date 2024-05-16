<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceConsumeTimeRankRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2020-09-21T00:00:00+0800
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description This parameter is required.
     *
     * @example 100000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'bizdate'   => 'Bizdate',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceConsumeTimeRankRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
