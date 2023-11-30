<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\ListAssignmentResponseBody\assignmentList;
use AlibabaCloud\Tea\Model;

class ListAssignmentResponseBody extends Model
{
    /**
     * @description The assigned roles.
     *
     * @var assignmentList[]
     */
    public $assignmentList;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If next_marker is empty, no next page exists.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $nextMarker;
    protected $_name = [
        'assignmentList' => 'assignment_list',
        'nextMarker'     => 'next_marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignmentList) {
            $res['assignment_list'] = [];
            if (null !== $this->assignmentList && \is_array($this->assignmentList)) {
                $n = 0;
                foreach ($this->assignmentList as $item) {
                    $res['assignment_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextMarker) {
            $res['next_marker'] = $this->nextMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssignmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignment_list'])) {
            if (!empty($map['assignment_list'])) {
                $model->assignmentList = [];
                $n                     = 0;
                foreach ($map['assignment_list'] as $item) {
                    $model->assignmentList[$n++] = null !== $item ? assignmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['next_marker'])) {
            $model->nextMarker = $map['next_marker'];
        }

        return $model;
    }
}
