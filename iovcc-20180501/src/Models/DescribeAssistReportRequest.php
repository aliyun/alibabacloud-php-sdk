<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssistReportRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $assistId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'assistId'  => 'AssistId',
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
        if (null !== $this->assistId) {
            $res['AssistId'] = $this->assistId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssistReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['AssistId'])) {
            $model->assistId = $map['AssistId'];
        }

        return $model;
    }
}
