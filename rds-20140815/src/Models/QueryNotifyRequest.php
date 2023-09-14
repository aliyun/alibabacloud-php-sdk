<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class QueryNotifyRequest extends Model
{
    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2022-05-02T08:38:37Z
     *
     * @var string
     */
    public $from;

    /**
     * @description The number of the page to return. Valid values: any **non-zero** positive integer.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * Default value: **30**.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2022-05-09T08:38:37Z
     *
     * @var string
     */
    public $to;

    /**
     * @description Specifies whether the query results contain confirmed notifications. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > You can call the [ConfirmNotify](~~610444~~) operation to confirm notifications of an instance.
     * @example false
     *
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
