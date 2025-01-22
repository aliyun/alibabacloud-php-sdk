<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsResponseBody\programAlerts;

class ListChannelAlertsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var programAlerts[]
     */
    public $programAlerts;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'programAlerts' => 'ProgramAlerts',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->programAlerts)) {
            Model::validateArray($this->programAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->programAlerts) {
            if (\is_array($this->programAlerts)) {
                $res['ProgramAlerts'] = [];
                $n1                   = 0;
                foreach ($this->programAlerts as $item1) {
                    $res['ProgramAlerts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProgramAlerts'])) {
            if (!empty($map['ProgramAlerts'])) {
                $model->programAlerts = [];
                $n1                   = 0;
                foreach ($map['ProgramAlerts'] as $item1) {
                    $model->programAlerts[$n1++] = programAlerts::fromMap($item1);
                }
            }
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
