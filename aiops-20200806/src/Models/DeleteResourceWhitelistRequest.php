<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceWhitelistRequest extends Model
{
    /**
     * @var int
     */
    public $inspectionWhitelistId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'inspectionWhitelistId' => 'InspectionWhitelistId',
        'operaUid'              => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionWhitelistId) {
            $res['InspectionWhitelistId'] = $this->inspectionWhitelistId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionWhitelistId'])) {
            $model->inspectionWhitelistId = $map['InspectionWhitelistId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
