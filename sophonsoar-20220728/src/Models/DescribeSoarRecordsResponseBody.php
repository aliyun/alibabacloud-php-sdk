<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\page;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\soarExecuteRecords;

class DescribeSoarRecordsResponseBody extends Model
{
    /**
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var soarExecuteRecords[]
     */
    public $soarExecuteRecords;
    protected $_name = [
        'page' => 'Page',
        'requestId' => 'RequestId',
        'soarExecuteRecords' => 'SoarExecuteRecords',
    ];

    public function validate()
    {
        if (null !== $this->page) {
            $this->page->validate();
        }
        if (\is_array($this->soarExecuteRecords)) {
            Model::validateArray($this->soarExecuteRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->soarExecuteRecords) {
            if (\is_array($this->soarExecuteRecords)) {
                $res['SoarExecuteRecords'] = [];
                $n1 = 0;
                foreach ($this->soarExecuteRecords as $item1) {
                    $res['SoarExecuteRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SoarExecuteRecords'])) {
            if (!empty($map['SoarExecuteRecords'])) {
                $model->soarExecuteRecords = [];
                $n1 = 0;
                foreach ($map['SoarExecuteRecords'] as $item1) {
                    $model->soarExecuteRecords[$n1] = soarExecuteRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
