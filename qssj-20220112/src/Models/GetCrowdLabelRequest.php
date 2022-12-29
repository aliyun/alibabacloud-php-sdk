<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetCrowdLabelRequest extends Model
{
    /**
     * @example [1623]
     *
     * @var string
     */
    public $cateIds;

    /**
     * @var string
     */
    public $endingDate;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'cateIds'    => 'CateIds',
        'endingDate' => 'EndingDate',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->endingDate) {
            $res['EndingDate'] = $this->endingDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCrowdLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['EndingDate'])) {
            $model->endingDate = $map['EndingDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
