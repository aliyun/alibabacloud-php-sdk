<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class GetDiagnoseResultForSingleCardRequest extends Model
{
    /**
     * @var string
     */
    public $diagnoseTaskId;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'diagnoseTaskId' => 'DiagnoseTaskId',
        'regionNo'       => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseTaskId) {
            $res['DiagnoseTaskId'] = $this->diagnoseTaskId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiagnoseResultForSingleCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseTaskId'])) {
            $model->diagnoseTaskId = $map['DiagnoseTaskId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
