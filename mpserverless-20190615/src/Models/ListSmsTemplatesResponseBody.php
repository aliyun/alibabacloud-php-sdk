<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListSmsTemplatesResponseBody\smsTemplates;
use AlibabaCloud\Tea\Model;

class ListSmsTemplatesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var smsTemplates[]
     */
    public $smsTemplates;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
        'smsTemplates' => 'SmsTemplates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->smsTemplates) {
            $res['SmsTemplates'] = [];
            if (null !== $this->smsTemplates && \is_array($this->smsTemplates)) {
                $n = 0;
                foreach ($this->smsTemplates as $item) {
                    $res['SmsTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmsTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SmsTemplates'])) {
            if (!empty($map['SmsTemplates'])) {
                $model->smsTemplates = [];
                $n                   = 0;
                foreach ($map['SmsTemplates'] as $item) {
                    $model->smsTemplates[$n++] = null !== $item ? smsTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
