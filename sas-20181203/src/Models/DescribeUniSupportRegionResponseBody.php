<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeUniSupportRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $uniSupportRegion;
    protected $_name = [
        'requestId'        => 'RequestId',
        'uniSupportRegion' => 'UniSupportRegion',
    ];

    public function validate()
    {
        if (\is_array($this->uniSupportRegion)) {
            Model::validateArray($this->uniSupportRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uniSupportRegion) {
            if (\is_array($this->uniSupportRegion)) {
                $res['UniSupportRegion'] = [];
                $n1                      = 0;
                foreach ($this->uniSupportRegion as $item1) {
                    $res['UniSupportRegion'][$n1++] = $item1;
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

        if (isset($map['UniSupportRegion'])) {
            if (!empty($map['UniSupportRegion'])) {
                $model->uniSupportRegion = [];
                $n1                      = 0;
                foreach ($map['UniSupportRegion'] as $item1) {
                    $model->uniSupportRegion[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
