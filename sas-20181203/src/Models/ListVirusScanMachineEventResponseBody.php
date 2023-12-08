<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\data;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListVirusScanMachineEventResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListVirusScanMachineEventResponseBody extends Model
{
    /**
     * @description The details of the alert event.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 2DAEF40F-8E1A-550D-8793-99C61C401DD0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirusScanMachineEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
