<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\CreateWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example w-acfmv4opbs****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'workflowId' => 'workflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        return $model;
    }
}
