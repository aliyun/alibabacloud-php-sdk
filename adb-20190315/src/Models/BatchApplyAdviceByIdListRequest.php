<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class BatchApplyAdviceByIdListRequest extends Model
{
    /**
     * @example 20221115
     *
     * @var int
     */
    public $adviceDate;

    /**
     * @example c2589ff3-e86c-4f19-80c8-2aeb7dd9****,53414470-ebf4-4a53-a312-8a1ad8fd****,6e8dce84-fec8-4b0b-9c04-b0cea12c****,b3b9703d-55ca-47e0-96dd-6a4a9dbf****
     *
     * @var string
     */
    public $adviceIdList;

    /**
     * @description The message returned for the operation. Valid values:
     *
     *   **SUCCESS** is returned if the operation is successful.
     *   An error message is returned if the operation fails.
     *
     * @example am-uf6g8w25jacm7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the request.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'adviceDate'   => 'AdviceDate',
        'adviceIdList' => 'AdviceIdList',
        'DBClusterId'  => 'DBClusterId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceDate) {
            $res['AdviceDate'] = $this->adviceDate;
        }
        if (null !== $this->adviceIdList) {
            $res['AdviceIdList'] = $this->adviceIdList;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchApplyAdviceByIdListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }
        if (isset($map['AdviceIdList'])) {
            $model->adviceIdList = $map['AdviceIdList'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
