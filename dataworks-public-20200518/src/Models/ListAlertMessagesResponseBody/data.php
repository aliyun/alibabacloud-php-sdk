<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages;

class data extends Model
{
    /**
     * @var alertMessages[]
     */
    public $alertMessages;
    /**
     * @var string
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $pageSize;
    /**
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
        if (\is_array($this->alertMessages)) {
            Model::validateArray($this->alertMessages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertMessages) {
            if (\is_array($this->alertMessages)) {
                $res['AlertMessages'] = [];
                $n1                   = 0;
                foreach ($this->alertMessages as $item1) {
                    $res['AlertMessages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertMessages'])) {
            if (!empty($map['AlertMessages'])) {
                $model->alertMessages = [];
                $n1                   = 0;
                foreach ($map['AlertMessages'] as $item1) {
                    $model->alertMessages[$n1++] = alertMessages::fromMap($item1);
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
