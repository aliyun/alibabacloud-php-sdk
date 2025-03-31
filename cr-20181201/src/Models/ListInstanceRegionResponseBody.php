<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceRegionResponseBody\regions;

class ListInstanceRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var regions[]
     */
    public $regions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'regions' => 'Regions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1++] = regions::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
