<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeInspectionProgressRequest extends Model
{
    /**
     * @var int
     */
    public $inspectionRecordId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'inspectionRecordId' => 'InspectionRecordId',
        'operaUid'           => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionRecordId) {
            $res['InspectionRecordId'] = $this->inspectionRecordId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInspectionProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionRecordId'])) {
            $model->inspectionRecordId = $map['InspectionRecordId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
