<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\ListAppSessionsResponseBody\appSessions;
use AlibabaCloud\Tea\Model;

class ListAppSessionsResponseBody extends Model
{
    /**
     * @var appSessions[]
     */
    public $appSessions;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSessions' => 'AppSessions',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSessions) {
            $res['AppSessions'] = [];
            if (null !== $this->appSessions && \is_array($this->appSessions)) {
                $n = 0;
                foreach ($this->appSessions as $item) {
                    $res['AppSessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppSessionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSessions'])) {
            if (!empty($map['AppSessions'])) {
                $model->appSessions = [];
                $n                  = 0;
                foreach ($map['AppSessions'] as $item) {
                    $model->appSessions[$n++] = null !== $item ? appSessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
