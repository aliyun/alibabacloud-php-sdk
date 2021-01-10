<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class QueryPrepublishPassedDeviceCountRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $prepublishId;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'prepublishId' => 'PrepublishId',
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
        if (null !== $this->prepublishId) {
            $res['PrepublishId'] = $this->prepublishId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPrepublishPassedDeviceCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PrepublishId'])) {
            $model->prepublishId = $map['PrepublishId'];
        }

        return $model;
    }
}
