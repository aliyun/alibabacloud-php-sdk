<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryMigrateRegionListResponseBody\regionEntityList;
use AlibabaCloud\Tea\Model;

class QueryMigrateRegionListResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var regionEntityList
     */
    public $regionEntityList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'             => 'Code',
        'message'          => 'Message',
        'regionEntityList' => 'RegionEntityList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionEntityList) {
            $res['RegionEntityList'] = null !== $this->regionEntityList ? $this->regionEntityList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMigrateRegionListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionEntityList'])) {
            $model->regionEntityList = regionEntityList::fromMap($map['RegionEntityList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
