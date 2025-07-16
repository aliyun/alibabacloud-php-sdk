<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlResponseBody\recordMinutesUrls;
use AlibabaCloud\Tea\Model;

class QueryRecordMinutesUrlResponseBody extends Model
{
    /**
     * @var recordMinutesUrls[]
     */
    public $recordMinutesUrls;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'recordMinutesUrls' => 'recordMinutesUrls',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordMinutesUrls) {
            $res['recordMinutesUrls'] = [];
            if (null !== $this->recordMinutesUrls && \is_array($this->recordMinutesUrls)) {
                $n = 0;
                foreach ($this->recordMinutesUrls as $item) {
                    $res['recordMinutesUrls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecordMinutesUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recordMinutesUrls'])) {
            if (!empty($map['recordMinutesUrls'])) {
                $model->recordMinutesUrls = [];
                $n = 0;
                foreach ($map['recordMinutesUrls'] as $item) {
                    $model->recordMinutesUrls[$n++] = null !== $item ? recordMinutesUrls::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
