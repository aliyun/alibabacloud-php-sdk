<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeEtlJobLogsResponseBody;

use AlibabaCloud\Dara\Model;

class etlRunningLogs extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentKey;
    /**
     * @var string
     */
    public $etlId;
    /**
     * @var string
     */
    public $logDatetime;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
