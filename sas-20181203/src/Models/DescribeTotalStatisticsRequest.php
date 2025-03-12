<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeTotalStatisticsRequest extends Model
{
    /**
     * @description The source of data. Default value: **aqs**. Valid values:
     *
     *   **sas**: Security Center
     *   **aqs**: Server Guard
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the asset group.
     *
     * > You can call the [DescribeAllGroups](https://help.aliyun.com/document_detail/130972.html) operation to query the IDs of asset groups.
     * @example 8076980
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name or public IP address of the asset.
     *
     * @example 222.185.XX.XX
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'from'    => 'From',
        'groupId' => 'GroupId',
        'remark'  => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTotalStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
