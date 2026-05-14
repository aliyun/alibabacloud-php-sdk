<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListExtensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListExtensResponseBody\data\extens;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var extens[]
     */
    public $extens;

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
        'clinkRequestId' => 'ClinkRequestId',
        'extens' => 'Extens',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->extens)) {
            Model::validateArray($this->extens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->extens) {
            if (\is_array($this->extens)) {
                $res['Extens'] = [];
                $n1 = 0;
                foreach ($this->extens as $item1) {
                    $res['Extens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['Extens'])) {
            if (!empty($map['Extens'])) {
                $model->extens = [];
                $n1 = 0;
                foreach ($map['Extens'] as $item1) {
                    $model->extens[$n1] = extens::fromMap($item1);
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
