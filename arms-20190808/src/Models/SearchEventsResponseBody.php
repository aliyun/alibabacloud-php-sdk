<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;
use AlibabaCloud\Tea\Model;

class SearchEventsResponseBody extends Model
{
    /**
     * @description The process identifier (PID) of the application that is associated with the alert rule.
     *
     * @example 0
     *
     * @var int
     */
    public $isTrigger;

    /**
     * @description The event content. The parameter value is a JSON string. Each key indicates a dimension and each value indicates the alert content in the dimension.
     *
     * @var pageBean
     */
    public $pageBean;

    /**
     * @description The severity of the event.
     *
     * @example 32940175-181B-4B93-966E-4BB69176****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isTrigger' => 'IsTrigger',
        'pageBean'  => 'PageBean',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTrigger) {
            $res['IsTrigger'] = $this->isTrigger;
        }
        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTrigger'])) {
            $model->isTrigger = $map['IsTrigger'];
        }
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
