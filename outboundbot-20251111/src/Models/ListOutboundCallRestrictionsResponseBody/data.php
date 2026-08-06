<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListOutboundCallRestrictionsResponseBody\data\outboundCallRestrictions;

class data extends Model
{
    /**
     * @var outboundCallRestrictions[]
     */
    public $outboundCallRestrictions;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'outboundCallRestrictions' => 'OutboundCallRestrictions',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->outboundCallRestrictions)) {
            Model::validateArray($this->outboundCallRestrictions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outboundCallRestrictions) {
            if (\is_array($this->outboundCallRestrictions)) {
                $res['OutboundCallRestrictions'] = [];
                $n1 = 0;
                foreach ($this->outboundCallRestrictions as $item1) {
                    $res['OutboundCallRestrictions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['OutboundCallRestrictions'])) {
            if (!empty($map['OutboundCallRestrictions'])) {
                $model->outboundCallRestrictions = [];
                $n1 = 0;
                foreach ($map['OutboundCallRestrictions'] as $item1) {
                    $model->outboundCallRestrictions[$n1] = outboundCallRestrictions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
