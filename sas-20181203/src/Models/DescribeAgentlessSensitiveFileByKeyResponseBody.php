<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentlessSensitiveFileByKeyResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentlessSensitiveFileByKeyResponseBody\sensitiveFileList;
use AlibabaCloud\Tea\Model;

class DescribeAgentlessSensitiveFileByKeyResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example FBBEB173-1F43-505F-A876-C03ECDF6CE4C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the sensitive files that are detected by using the agentless detection feature.
     *
     * @var sensitiveFileList[]
     */
    public $sensitiveFileList;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'sensitiveFileList' => 'SensitiveFileList',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sensitiveFileList) {
            $res['SensitiveFileList'] = [];
            if (null !== $this->sensitiveFileList && \is_array($this->sensitiveFileList)) {
                $n = 0;
                foreach ($this->sensitiveFileList as $item) {
                    $res['SensitiveFileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAgentlessSensitiveFileByKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitiveFileList'])) {
            if (!empty($map['SensitiveFileList'])) {
                $model->sensitiveFileList = [];
                $n = 0;
                foreach ($map['SensitiveFileList'] as $item) {
                    $model->sensitiveFileList[$n++] = null !== $item ? sensitiveFileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
