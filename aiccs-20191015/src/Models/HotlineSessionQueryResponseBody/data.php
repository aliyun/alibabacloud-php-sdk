<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponseBody\data\callDetailRecord;

class data extends Model
{
    /**
     * @var callDetailRecord[]
     */
    public $callDetailRecord;

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
        'callDetailRecord' => 'CallDetailRecord',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->callDetailRecord)) {
            Model::validateArray($this->callDetailRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDetailRecord) {
            if (\is_array($this->callDetailRecord)) {
                $res['CallDetailRecord'] = [];
                $n1 = 0;
                foreach ($this->callDetailRecord as $item1) {
                    $res['CallDetailRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallDetailRecord'])) {
            if (!empty($map['CallDetailRecord'])) {
                $model->callDetailRecord = [];
                $n1 = 0;
                foreach ($map['CallDetailRecord'] as $item1) {
                    $model->callDetailRecord[$n1] = callDetailRecord::fromMap($item1);
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
