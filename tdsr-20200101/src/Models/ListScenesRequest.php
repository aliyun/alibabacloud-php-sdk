<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListScenesRequest extends Model
{
    /**
     * @var bool
     */
    public $isPublishQuery;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'isPublishQuery' => 'IsPublishQuery',
        'projectId'      => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPublishQuery) {
            $res['IsPublishQuery'] = $this->isPublishQuery;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScenesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPublishQuery'])) {
            $model->isPublishQuery = $map['IsPublishQuery'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
