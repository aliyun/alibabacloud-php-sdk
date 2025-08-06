<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponseBody\histories;

class GetAuditHistoryResponseBody extends Model
{
    /**
     * @var histories[]
     */
    public $histories;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'histories' => 'Histories',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->histories)) {
            Model::validateArray($this->histories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->histories) {
            if (\is_array($this->histories)) {
                $res['Histories'] = [];
                $n1 = 0;
                foreach ($this->histories as $item1) {
                    $res['Histories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n1 = 0;
                foreach ($map['Histories'] as $item1) {
                    $model->histories[$n1] = histories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
