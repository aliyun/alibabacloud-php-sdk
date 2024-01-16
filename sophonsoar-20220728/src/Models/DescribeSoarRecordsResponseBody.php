<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\soarExecuteRecords;
use AlibabaCloud\Tea\Model;

class DescribeSoarRecordsResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The request ID.
     *
     * @example 601C2DAC-6A67-5237-BEE8-5BF1CEE96296
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The execution records.
     *
     * @var soarExecuteRecords[]
     */
    public $soarExecuteRecords;
    protected $_name = [
        'page'               => 'Page',
        'requestId'          => 'RequestId',
        'soarExecuteRecords' => 'SoarExecuteRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->soarExecuteRecords) {
            $res['SoarExecuteRecords'] = [];
            if (null !== $this->soarExecuteRecords && \is_array($this->soarExecuteRecords)) {
                $n = 0;
                foreach ($this->soarExecuteRecords as $item) {
                    $res['SoarExecuteRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SoarExecuteRecords'])) {
            if (!empty($map['SoarExecuteRecords'])) {
                $model->soarExecuteRecords = [];
                $n                         = 0;
                foreach ($map['SoarExecuteRecords'] as $item) {
                    $model->soarExecuteRecords[$n++] = null !== $item ? soarExecuteRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
