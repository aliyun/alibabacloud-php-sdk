<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchEventsResponseBody\pageBean;
use AlibabaCloud\Tea\Model;

class SearchEventsResponseBody extends Model
{
    /**
     * @var pageBean
     */
    public $pageBean;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $isTrigger;
    protected $_name = [
        'pageBean'  => 'PageBean',
        'requestId' => 'RequestId',
        'isTrigger' => 'IsTrigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTrigger) {
            $res['IsTrigger'] = $this->isTrigger;
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
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTrigger'])) {
            $model->isTrigger = $map['IsTrigger'];
        }

        return $model;
    }
}
