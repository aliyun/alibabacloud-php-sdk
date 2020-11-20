<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ListScenesRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $isPublishQuery;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'isPublishQuery' => 'IsPublishQuery',
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
        if (null !== $this->isPublishQuery) {
            $res['IsPublishQuery'] = $this->isPublishQuery;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsPublishQuery'])) {
            $model->isPublishQuery = $map['IsPublishQuery'];
        }

        return $model;
    }
}
