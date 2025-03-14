<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationProcessResponseBody\processes;
use AlibabaCloud\Tea\Model;

class ListOperationProcessResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The information about the operation tasks.
     *
     * @var processes[]
     */
    public $processes;

    /**
     * @description The request ID.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'processes' => 'Processes',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->processes) {
            $res['Processes'] = [];
            if (null !== $this->processes && \is_array($this->processes)) {
                $n = 0;
                foreach ($this->processes as $item) {
                    $res['Processes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['Processes'])) {
            if (!empty($map['Processes'])) {
                $model->processes = [];
                $n = 0;
                foreach ($map['Processes'] as $item) {
                    $model->processes[$n++] = null !== $item ? processes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
