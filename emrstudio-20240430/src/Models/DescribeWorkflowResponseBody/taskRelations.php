<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class taskRelations extends Model
{
    /**
     * @example t-n72kong0832****
     *
     * @var string
     */
    public $postTaskId;

    /**
     * @example t-n72kong0832****
     *
     * @var string
     */
    public $preTaskId;
    protected $_name = [
        'postTaskId' => 'postTaskId',
        'preTaskId'  => 'preTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postTaskId) {
            $res['postTaskId'] = $this->postTaskId;
        }
        if (null !== $this->preTaskId) {
            $res['preTaskId'] = $this->preTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['postTaskId'])) {
            $model->postTaskId = $map['postTaskId'];
        }
        if (isset($map['preTaskId'])) {
            $model->preTaskId = $map['preTaskId'];
        }

        return $model;
    }
}
