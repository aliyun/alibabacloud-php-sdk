<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponseBody\checkItems;
use AlibabaCloud\Tea\Model;

class GetClusterDiagnosisCheckItemsResponseBody extends Model
{
    /**
     * @var checkItems[]
     */
    public $checkItems;

    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1DFFD8C6-259E-582B-8B40-002C17DC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkItems' => 'check_items',
        'code'       => 'code',
        'isSuccess'  => 'is_success',
        'requestId'  => 'request_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItems) {
            $res['check_items'] = [];
            if (null !== $this->checkItems && \is_array($this->checkItems)) {
                $n = 0;
                foreach ($this->checkItems as $item) {
                    $res['check_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['is_success'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterDiagnosisCheckItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_items'])) {
            if (!empty($map['check_items'])) {
                $model->checkItems = [];
                $n                 = 0;
                foreach ($map['check_items'] as $item) {
                    $model->checkItems[$n++] = null !== $item ? checkItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['is_success'])) {
            $model->isSuccess = $map['is_success'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
