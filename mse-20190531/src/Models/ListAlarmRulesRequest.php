<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmRulesRequest extends Model
{
    /**
     * @var string
     */
    public $requestPars;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $alarmMseType;
    protected $_name = [
        'requestPars'  => 'RequestPars',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'alarmMseType' => 'AlarmMseType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->alarmMseType) {
            $res['AlarmMseType'] = $this->alarmMseType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AlarmMseType'])) {
            $model->alarmMseType = $map['AlarmMseType'];
        }

        return $model;
    }
}
