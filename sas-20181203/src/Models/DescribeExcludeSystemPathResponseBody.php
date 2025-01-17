<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody\excludePaths;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody\pageInfo;

class DescribeExcludeSystemPathResponseBody extends Model
{
    /**
     * @var excludePaths[]
     */
    public $excludePaths;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'excludePaths' => 'ExcludePaths',
        'pageInfo'     => 'PageInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->excludePaths)) {
            Model::validateArray($this->excludePaths);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludePaths) {
            if (\is_array($this->excludePaths)) {
                $res['ExcludePaths'] = [];
                $n1                  = 0;
                foreach ($this->excludePaths as $item1) {
                    $res['ExcludePaths'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = [];
                $n1                  = 0;
                foreach ($map['ExcludePaths'] as $item1) {
                    $model->excludePaths[$n1++] = excludePaths::fromMap($item1);
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
