<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessDetailResponseBody\processDetails;
use AlibabaCloud\Tea\Model;

class ListOperationProcessDetailResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var processDetails[]
     */
    public $processDetails;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F3***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'       => 'PageInfo',
        'processDetails' => 'ProcessDetails',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->processDetails) {
            $res['ProcessDetails'] = [];
            if (null !== $this->processDetails && \is_array($this->processDetails)) {
                $n = 0;
                foreach ($this->processDetails as $item) {
                    $res['ProcessDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationProcessDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['ProcessDetails'])) {
            if (!empty($map['ProcessDetails'])) {
                $model->processDetails = [];
                $n                     = 0;
                foreach ($map['ProcessDetails'] as $item) {
                    $model->processDetails[$n++] = null !== $item ? processDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
