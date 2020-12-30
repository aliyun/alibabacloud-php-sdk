<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDetailDataExportTaskResponseBody\usageDataPerPage;
use AlibabaCloud\Tea\Model;

class DescribeUserUsageDetailDataExportTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usageDataPerPage
     */
    public $usageDataPerPage;
    protected $_name = [
        'requestId'        => 'RequestId',
        'usageDataPerPage' => 'UsageDataPerPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usageDataPerPage) {
            $res['UsageDataPerPage'] = null !== $this->usageDataPerPage ? $this->usageDataPerPage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserUsageDetailDataExportTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageDataPerPage'])) {
            $model->usageDataPerPage = usageDataPerPage::fromMap($map['UsageDataPerPage']);
        }

        return $model;
    }
}
