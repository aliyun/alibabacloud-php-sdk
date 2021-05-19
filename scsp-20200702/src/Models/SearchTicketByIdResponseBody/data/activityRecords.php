<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class activityRecords extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $actionCodeDesc;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $gmtCreate;
    protected $_name = [
        'actionCode'     => 'ActionCode',
        'actionCodeDesc' => 'ActionCodeDesc',
        'operatorName'   => 'OperatorName',
        'memo'           => 'Memo',
        'gmtCreate'      => 'GmtCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }
        if (null !== $this->actionCodeDesc) {
            $res['ActionCodeDesc'] = $this->actionCodeDesc;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }
        if (isset($map['ActionCodeDesc'])) {
            $model->actionCodeDesc = $map['ActionCodeDesc'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
