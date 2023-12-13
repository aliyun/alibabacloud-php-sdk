<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeInstanceOpsRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The time when the O\&M task was created.
     *
     * @example 2021-12-29T15:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the O\&M task expires.
     *
     * @example 2099-12-29T15:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The status of the O\&M task.
     *
     * @example Ready
     *
     * @var string
     */
    public $opsStatus;

    /**
     * @description The type of the O\&M task.
     *
     * @example coredump
     *
     * @var string
     */
    public $opsType;

    /**
     * @description The content of the O\&M result. The content is the download URL of the files that are generated for the O\&M task.
     *
     * @example https://******
     *
     * @var string
     */
    public $resultContent;

    /**
     * @description The type of the O\&M result. Valid value: OSS. This value indicates that the files generated for the O\&M task are saved to Object Storage Service (OSS) buckets.
     *
     * @example OSS
     *
     * @var string
     */
    public $resultType;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'expireTime'    => 'ExpireTime',
        'opsStatus'     => 'OpsStatus',
        'opsType'       => 'OpsType',
        'resultContent' => 'ResultContent',
        'resultType'    => 'ResultType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->opsStatus) {
            $res['OpsStatus'] = $this->opsStatus;
        }
        if (null !== $this->opsType) {
            $res['OpsType'] = $this->opsType;
        }
        if (null !== $this->resultContent) {
            $res['ResultContent'] = $this->resultContent;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['OpsStatus'])) {
            $model->opsStatus = $map['OpsStatus'];
        }
        if (isset($map['OpsType'])) {
            $model->opsType = $map['OpsType'];
        }
        if (isset($map['ResultContent'])) {
            $model->resultContent = $map['ResultContent'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        return $model;
    }
}
