<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class StartWorkflowInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int[]
     */
    public $ids;
    protected $_name = [
        'comment' => 'Comment',
        'ids'     => 'Ids',
    ];

    public function validate()
    {
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1         = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1         = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
