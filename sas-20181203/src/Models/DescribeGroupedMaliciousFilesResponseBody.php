<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponseBody\groupedMaliciousFileResponse;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedMaliciousFilesResponseBody\pageInfo;

class DescribeGroupedMaliciousFilesResponseBody extends Model
{
    /**
     * @var groupedMaliciousFileResponse[]
     */
    public $groupedMaliciousFileResponse;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedMaliciousFileResponse' => 'GroupedMaliciousFileResponse',
        'pageInfo'                     => 'PageInfo',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groupedMaliciousFileResponse)) {
            Model::validateArray($this->groupedMaliciousFileResponse);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupedMaliciousFileResponse) {
            if (\is_array($this->groupedMaliciousFileResponse)) {
                $res['GroupedMaliciousFileResponse'] = [];
                $n1                                  = 0;
                foreach ($this->groupedMaliciousFileResponse as $item1) {
                    $res['GroupedMaliciousFileResponse'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GroupedMaliciousFileResponse'])) {
            if (!empty($map['GroupedMaliciousFileResponse'])) {
                $model->groupedMaliciousFileResponse = [];
                $n1                                  = 0;
                foreach ($map['GroupedMaliciousFileResponse'] as $item1) {
                    $model->groupedMaliciousFileResponse[$n1++] = groupedMaliciousFileResponse::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
