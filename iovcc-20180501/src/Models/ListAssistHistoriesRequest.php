<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListAssistHistoriesRequest extends Model
{
    /**
     * @var int
     */
    public $perPage;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'perPage'   => 'PerPage',
        'pageIndex' => 'PageIndex',
        'condition' => 'Condition',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perPage) {
            $res['PerPage'] = $this->perPage;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssistHistoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerPage'])) {
            $model->perPage = $map['PerPage'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
