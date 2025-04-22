<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\ListAssignmentResponseBody\assignmentList;

class ListAssignmentResponseBody extends Model
{
    /**
     * @var assignmentList[]
     */
    public $assignmentList;

    /**
     * @var string
     */
    public $nextMarker;
    protected $_name = [
        'assignmentList' => 'assignment_list',
        'nextMarker' => 'next_marker',
    ];

    public function validate()
    {
        if (\is_array($this->assignmentList)) {
            Model::validateArray($this->assignmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignmentList) {
            if (\is_array($this->assignmentList)) {
                $res['assignment_list'] = [];
                $n1 = 0;
                foreach ($this->assignmentList as $item1) {
                    $res['assignment_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
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
        if (isset($map['assignment_list'])) {
            if (!empty($map['assignment_list'])) {
                $model->assignmentList = [];
                $n1 = 0;
                foreach ($map['assignment_list'] as $item1) {
                    $model->assignmentList[$n1++] = assignmentList::fromMap($item1);
                }
            }
        }

        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }

        return $model;
    }
}
