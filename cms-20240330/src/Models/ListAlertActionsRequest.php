<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class ListAlertActionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $alertActionIds;

    /**
     * @var string
     */
    public $alertActionName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertActionIds'  => 'alertActionIds',
        'alertActionName' => 'alertActionName',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertActionIds) {
            $res['alertActionIds'] = $this->alertActionIds;
        }
        if (null !== $this->alertActionName) {
            $res['alertActionName'] = $this->alertActionName;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertActionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertActionIds'])) {
            if (!empty($map['alertActionIds'])) {
                $model->alertActionIds = $map['alertActionIds'];
            }
        }
        if (isset($map['alertActionName'])) {
            $model->alertActionName = $map['alertActionName'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
