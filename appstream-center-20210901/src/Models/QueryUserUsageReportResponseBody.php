<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryUserUsageReportResponseBody\userUsageReportDataModel;

class QueryUserUsageReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userUsageReportDataModel[]
     */
    public $userUsageReportDataModel;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'message' => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'userUsageReportDataModel' => 'UserUsageReportDataModel',
    ];

    public function validate()
    {
        if (\is_array($this->userUsageReportDataModel)) {
            Model::validateArray($this->userUsageReportDataModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userUsageReportDataModel) {
            if (\is_array($this->userUsageReportDataModel)) {
                $res['UserUsageReportDataModel'] = [];
                $n1 = 0;
                foreach ($this->userUsageReportDataModel as $item1) {
                    $res['UserUsageReportDataModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserUsageReportDataModel'])) {
            if (!empty($map['UserUsageReportDataModel'])) {
                $model->userUsageReportDataModel = [];
                $n1 = 0;
                foreach ($map['UserUsageReportDataModel'] as $item1) {
                    $model->userUsageReportDataModel[$n1] = userUsageReportDataModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
