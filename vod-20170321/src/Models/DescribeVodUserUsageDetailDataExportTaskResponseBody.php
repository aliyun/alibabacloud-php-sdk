<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserUsageDetailDataExportTaskResponseBody\usageDataPerPage;

class DescribeVodUserUsageDetailDataExportTaskResponseBody extends Model
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
        'requestId' => 'RequestId',
        'usageDataPerPage' => 'UsageDataPerPage',
    ];

    public function validate()
    {
        if (null !== $this->usageDataPerPage) {
            $this->usageDataPerPage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageDataPerPage) {
            $res['UsageDataPerPage'] = null !== $this->usageDataPerPage ? $this->usageDataPerPage->toArray($noStream) : $this->usageDataPerPage;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsageDataPerPage'])) {
            $model->usageDataPerPage = usageDataPerPage::fromMap($map['UsageDataPerPage']);
        }

        return $model;
    }
}
