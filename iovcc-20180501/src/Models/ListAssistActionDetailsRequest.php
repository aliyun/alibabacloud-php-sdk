<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListAssistActionDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $actionTimestamp;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'actionTimestamp' => 'ActionTimestamp',
        'projectId'       => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssistActionDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionTimestamp'])) {
            $model->actionTimestamp = $map['ActionTimestamp'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
