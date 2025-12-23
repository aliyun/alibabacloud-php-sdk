<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Dara\Model;

class taskRelations extends Model
{
    /**
     * @var string
     */
    public $postTaskId;

    /**
     * @var string
     */
    public $preTaskId;
    protected $_name = [
        'postTaskId' => 'postTaskId',
        'preTaskId' => 'preTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
