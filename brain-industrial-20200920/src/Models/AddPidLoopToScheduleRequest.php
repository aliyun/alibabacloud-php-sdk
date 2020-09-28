<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class AddPidLoopToScheduleRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $pidLoopIdList;
    protected $_name = [
        'pidLoopIdList' => 'PidLoopIdList',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopIdList', $this->pidLoopIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopIdList) {
            $res['PidLoopIdList'] = $this->pidLoopIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPidLoopToScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopIdList'])) {
            $model->pidLoopIdList = $map['PidLoopIdList'];
        }

        return $model;
    }
}
