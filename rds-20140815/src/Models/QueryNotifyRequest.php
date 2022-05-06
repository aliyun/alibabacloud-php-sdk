<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class QueryNotifyRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $to;

    /**
     * @var bool
     */
    public $withConfirmed;
    protected $_name = [
        'from'          => 'From',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'to'            => 'To',
        'withConfirmed' => 'WithConfirmed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->withConfirmed) {
            $res['WithConfirmed'] = $this->withConfirmed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryNotifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['WithConfirmed'])) {
            $model->withConfirmed = $map['WithConfirmed'];
        }

        return $model;
    }
}
