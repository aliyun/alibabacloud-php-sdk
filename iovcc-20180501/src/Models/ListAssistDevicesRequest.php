<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ListAssistDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var int
     */
    public $perPage;
    protected $_name = [
        'projectId' => 'ProjectId',
        'pageIndex' => 'PageIndex',
        'condition' => 'Condition',
        'perPage'   => 'PerPage',
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
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->perPage) {
            $res['PerPage'] = $this->perPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssistDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['PerPage'])) {
            $model->perPage = $map['PerPage'];
        }

        return $model;
    }
}
