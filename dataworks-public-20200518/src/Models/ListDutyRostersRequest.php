<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDutyRostersRequest extends Model
{
    /**
     * @var string
     */
    public $dutyRosterName;

    /**
     * @var string
     */
    public $dutyRosterOwner;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'dutyRosterName'  => 'DutyRosterName',
        'dutyRosterOwner' => 'DutyRosterOwner',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyRosterName) {
            $res['DutyRosterName'] = $this->dutyRosterName;
        }
        if (null !== $this->dutyRosterOwner) {
            $res['DutyRosterOwner'] = $this->dutyRosterOwner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDutyRostersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DutyRosterName'])) {
            $model->dutyRosterName = $map['DutyRosterName'];
        }
        if (isset($map['DutyRosterOwner'])) {
            $model->dutyRosterOwner = $map['DutyRosterOwner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
