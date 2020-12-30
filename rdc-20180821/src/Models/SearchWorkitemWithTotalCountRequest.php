<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class SearchWorkitemWithTotalCountRequest extends Model
{
    /**
     * @var string
     */
    public $stamp;

    /**
     * @var int
     */
    public $AKProjectId;

    /**
     * @var int
     */
    public $toPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var int
     */
    public $sprintId;
    protected $_name = [
        'stamp'          => 'Stamp',
        'AKProjectId'    => 'AKProjectId',
        'toPage'         => 'ToPage',
        'pageSize'       => 'PageSize',
        'corpIdentifier' => 'CorpIdentifier',
        'sprintId'       => 'SprintId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stamp) {
            $res['Stamp'] = $this->stamp;
        }
        if (null !== $this->AKProjectId) {
            $res['AKProjectId'] = $this->AKProjectId;
        }
        if (null !== $this->toPage) {
            $res['ToPage'] = $this->toPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchWorkitemWithTotalCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stamp'])) {
            $model->stamp = $map['Stamp'];
        }
        if (isset($map['AKProjectId'])) {
            $model->AKProjectId = $map['AKProjectId'];
        }
        if (isset($map['ToPage'])) {
            $model->toPage = $map['ToPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }

        return $model;
    }
}
