<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponseBody\groupedMaliciousFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeGroupedMaliciousFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var groupedMaliciousFileResponse[]
     */
    public $groupedMaliciousFileResponse;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'pageInfo'                     => 'PageInfo',
        'groupedMaliciousFileResponse' => 'GroupedMaliciousFileResponse',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->groupedMaliciousFileResponse) {
            $res['GroupedMaliciousFileResponse'] = [];
            if (null !== $this->groupedMaliciousFileResponse && \is_array($this->groupedMaliciousFileResponse)) {
                $n = 0;
                foreach ($this->groupedMaliciousFileResponse as $item) {
                    $res['GroupedMaliciousFileResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedMaliciousFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['GroupedMaliciousFileResponse'])) {
            if (!empty($map['GroupedMaliciousFileResponse'])) {
                $model->groupedMaliciousFileResponse = [];
                $n                                   = 0;
                foreach ($map['GroupedMaliciousFileResponse'] as $item) {
                    $model->groupedMaliciousFileResponse[$n++] = null !== $item ? groupedMaliciousFileResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
