<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSupportRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $supportRegion;
    protected $_name = [
        'requestId'     => 'RequestId',
        'supportRegion' => 'SupportRegion',
    ];

    public function validate()
    {
        if (\is_array($this->supportRegion)) {
            Model::validateArray($this->supportRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportRegion) {
            if (\is_array($this->supportRegion)) {
                $res['SupportRegion'] = [];
                $n1                   = 0;
                foreach ($this->supportRegion as $item1) {
                    $res['SupportRegion'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportRegion'])) {
            if (!empty($map['SupportRegion'])) {
                $model->supportRegion = [];
                $n1                   = 0;
                foreach ($map['SupportRegion'] as $item1) {
                    $model->supportRegion[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
