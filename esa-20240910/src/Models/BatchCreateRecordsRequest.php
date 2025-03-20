<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList;
use AlibabaCloud\Tea\Model;

class BatchCreateRecordsRequest extends Model
{
    /**
     * @description The list of DNS records to be created.
     *
     * This parameter is required.
     *
     * @var recordList[]
     */
    public $recordList;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'recordList' => 'RecordList',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordList) {
            $res['RecordList'] = [];
            if (null !== $this->recordList && \is_array($this->recordList)) {
                $n = 0;
                foreach ($this->recordList as $item) {
                    $res['RecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordList'])) {
            if (!empty($map['RecordList'])) {
                $model->recordList = [];
                $n = 0;
                foreach ($map['RecordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? recordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
