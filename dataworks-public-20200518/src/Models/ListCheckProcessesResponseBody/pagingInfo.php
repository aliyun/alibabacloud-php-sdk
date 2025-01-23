<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCheckProcessesResponseBody\pagingInfo\checkProcesses;

class pagingInfo extends Model
{
    /**
     * @var checkProcesses[]
     */
    public $checkProcesses;
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
        'checkProcesses' => 'CheckProcesses',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->checkProcesses)) {
            Model::validateArray($this->checkProcesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkProcesses) {
            if (\is_array($this->checkProcesses)) {
                $res['CheckProcesses'] = [];
                $n1                    = 0;
                foreach ($this->checkProcesses as $item1) {
                    $res['CheckProcesses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckProcesses'])) {
            if (!empty($map['CheckProcesses'])) {
                $model->checkProcesses = [];
                $n1                    = 0;
                foreach ($map['CheckProcesses'] as $item1) {
                    $model->checkProcesses[$n1++] = checkProcesses::fromMap($item1);
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
