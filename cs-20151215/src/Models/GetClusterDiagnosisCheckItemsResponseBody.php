<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponseBody\checkItems;

class GetClusterDiagnosisCheckItemsResponseBody extends Model
{
    /**
     * @var checkItems[]
     */
    public $checkItems;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkItems' => 'check_items',
        'code' => 'code',
        'isSuccess' => 'is_success',
        'requestId' => 'request_id',
    ];

    public function validate()
    {
        if (\is_array($this->checkItems)) {
            Model::validateArray($this->checkItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItems) {
            if (\is_array($this->checkItems)) {
                $res['check_items'] = [];
                $n1 = 0;
                foreach ($this->checkItems as $item1) {
                    $res['check_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_items'])) {
            if (!empty($map['check_items'])) {
                $model->checkItems = [];
                $n1 = 0;
                foreach ($map['check_items'] as $item1) {
                    $model->checkItems[$n1++] = checkItems::fromMap($item1);
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
