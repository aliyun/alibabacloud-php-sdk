<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceAmountRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;
    protected $_name = [
        'projectId' => 'ProjectId',
        'beginDate' => 'BeginDate',
        'endDate'   => 'EndDate',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('beginDate', $this->beginDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        return $model;
    }
}
