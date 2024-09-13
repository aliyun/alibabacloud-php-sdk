<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateResponseBody\templateList;
use AlibabaCloud\Tea\Model;

class ListTemplateResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example next_token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example []
     *
     * @var templateList[]
     */
    public $templateList;

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
        'hasMore'         => 'hasMore',
        'nextToken'       => 'nextToken',
        'requestId'       => 'requestId',
        'templateList'    => 'templateList',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType'      => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->templateList) {
            $res['templateList'] = [];
            if (null !== $this->templateList && \is_array($this->templateList)) {
                $n = 0;
                foreach ($this->templateList as $item) {
                    $res['templateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['templateList'])) {
            if (!empty($map['templateList'])) {
                $model->templateList = [];
                $n                   = 0;
                foreach ($map['templateList'] as $item) {
                    $model->templateList[$n++] = null !== $item ? templateList::fromMap($item) : $item;
                }
            }
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
