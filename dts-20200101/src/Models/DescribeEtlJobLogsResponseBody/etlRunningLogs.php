<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEtlJobLogsResponseBody;

use AlibabaCloud\Tea\Model;

class etlRunningLogs extends Model
{
    /**
     * @description The state of the ETL task.
     *
     * @example Starting DTS-ETL...
     *
     * @var string
     */
    public $content;

    /**
     * @description The module for which the logs are generated, such as the conversion module of ETL tasks.
     *
     * @example DTS-ETL
     *
     * @var string
     */
    public $contentKey;

    /**
     * @description The ID of the ETL task.
     *
     * @example u**********5
     *
     * @var string
     */
    public $etlId;

    /**
     * @description The time when the log was generated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1637306503000
     *
     * @var string
     */
    public $logDatetime;

    /**
     * @description The log level. Valid values: ERROR, WARN, INFO, and DEBUG.
     *
     * @example INFO
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user.
     *
     * @example 121323*******454512
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'content'     => 'Content',
        'contentKey'  => 'ContentKey',
        'etlId'       => 'EtlId',
        'logDatetime' => 'LogDatetime',
        'status'      => 'Status',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentKey) {
            $res['ContentKey'] = $this->contentKey;
        }
        if (null !== $this->etlId) {
            $res['EtlId'] = $this->etlId;
        }
        if (null !== $this->logDatetime) {
            $res['LogDatetime'] = $this->logDatetime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return etlRunningLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentKey'])) {
            $model->contentKey = $map['ContentKey'];
        }
        if (isset($map['EtlId'])) {
            $model->etlId = $map['EtlId'];
        }
        if (isset($map['LogDatetime'])) {
            $model->logDatetime = $map['LogDatetime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
