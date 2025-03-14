<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAllRegionsStatisticsRequest extends Model
{
    /**
     * @description The source of the request. Default value: **aqs**. Valid values:
     *
     *   **sas**: Security Center.
     *   **aqs**: Server Guard.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID of the asset group that you want to query.
     *
     * >  You can call the [DescribeAllGroups](https://help.aliyun.com/document_detail/130972.html) operation to query the ID.
     *
     * @example 1161****
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name or public IP address of the asset.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The source IP address of the request.
     *
     * @example 33.80.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'from' => 'From',
        'groupId' => 'GroupId',
        'remark' => 'Remark',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllRegionsStatisticsRequest
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
