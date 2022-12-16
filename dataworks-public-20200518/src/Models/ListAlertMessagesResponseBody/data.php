<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var alertMessages[]
     */
    public $alertMessages;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'alertMessages' => 'AlertMessages',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertMessages) {
            $res['AlertMessages'] = [];
            if (null !== $this->alertMessages && \is_array($this->alertMessages)) {
                $n = 0;
                foreach ($this->alertMessages as $item) {
                    $res['AlertMessages'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AlertMessages'])) {
            if (!empty($map['AlertMessages'])) {
                $model->alertMessages = [];
                $n                    = 0;
                foreach ($map['AlertMessages'] as $item) {
                    $model->alertMessages[$n++] = null !== $item ? alertMessages::fromMap($item) : $item;
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
