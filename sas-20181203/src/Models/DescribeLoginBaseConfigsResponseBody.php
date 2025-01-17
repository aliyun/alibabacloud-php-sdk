<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginBaseConfigsResponseBody\baseConfigs;

class DescribeLoginBaseConfigsResponseBody extends Model
{
    /**
     * @var baseConfigs[]
     */
    public $baseConfigs;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'baseConfigs' => 'BaseConfigs',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->baseConfigs)) {
            Model::validateArray($this->baseConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseConfigs) {
            if (\is_array($this->baseConfigs)) {
                $res['BaseConfigs'] = [];
                $n1                 = 0;
                foreach ($this->baseConfigs as $item1) {
                    $res['BaseConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BaseConfigs'])) {
            if (!empty($map['BaseConfigs'])) {
                $model->baseConfigs = [];
                $n1                 = 0;
                foreach ($map['BaseConfigs'] as $item1) {
                    $model->baseConfigs[$n1++] = baseConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
