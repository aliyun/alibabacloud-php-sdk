<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserUsageDataExportTaskResponseBody\usageDataPerPage;
use AlibabaCloud\Tea\Model;

class DescribeUserUsageDataExportTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example A91BE91F-0B34-4CBF-8E0F-A2977E15AA52
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The usage details returned per page.
     *
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
     * @return DescribeUserUsageDataExportTaskResponseBody
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
