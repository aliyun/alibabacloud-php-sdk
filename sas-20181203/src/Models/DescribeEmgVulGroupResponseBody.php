<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulGroupResponseBody\emgVulGroupList;
use AlibabaCloud\Tea\Model;

class DescribeEmgVulGroupResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var emgVulGroupList[]
     */
    public $emgVulGroupList;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'emgVulGroupList' => 'EmgVulGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->emgVulGroupList) {
            $res['EmgVulGroupList'] = [];
            if (null !== $this->emgVulGroupList && \is_array($this->emgVulGroupList)) {
                $n = 0;
                foreach ($this->emgVulGroupList as $item) {
                    $res['EmgVulGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEmgVulGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EmgVulGroupList'])) {
            if (!empty($map['EmgVulGroupList'])) {
                $model->emgVulGroupList = [];
                $n                      = 0;
                foreach ($map['EmgVulGroupList'] as $item) {
                    $model->emgVulGroupList[$n++] = null !== $item ? emgVulGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
