<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueDataServiceAPIsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueDataServiceAPIsResponseBody\data\APIs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var APIs[]
     */
    public $APIs;

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
        'APIs'       => 'APIs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APIs) {
            $res['APIs'] = [];
            if (null !== $this->APIs && \is_array($this->APIs)) {
                $n = 0;
                foreach ($this->APIs as $item) {
                    $res['APIs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APIs'])) {
            if (!empty($map['APIs'])) {
                $model->APIs = [];
                $n           = 0;
                foreach ($map['APIs'] as $item) {
                    $model->APIs[$n++] = null !== $item ? APIs::fromMap($item) : $item;
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
