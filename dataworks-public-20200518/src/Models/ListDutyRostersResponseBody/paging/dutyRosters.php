<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDutyRostersResponseBody\paging;

use AlibabaCloud\Tea\Model;

class dutyRosters extends Model
{
    /**
     * @var string
     */
    public $dutyRosterIdentifier;

    /**
     * @var string
     */
    public $dutyRosterName;
    protected $_name = [
        'dutyRosterIdentifier' => 'DutyRosterIdentifier',
        'dutyRosterName'       => 'DutyRosterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyRosterIdentifier) {
            $res['DutyRosterIdentifier'] = $this->dutyRosterIdentifier;
        }
        if (null !== $this->dutyRosterName) {
            $res['DutyRosterName'] = $this->dutyRosterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dutyRosters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DutyRosterIdentifier'])) {
            $model->dutyRosterIdentifier = $map['DutyRosterIdentifier'];
        }
        if (isset($map['DutyRosterName'])) {
            $model->dutyRosterName = $map['DutyRosterName'];
        }

        return $model;
    }
}
