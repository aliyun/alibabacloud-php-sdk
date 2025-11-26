<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponseBody\ensNetDistricts;

class DescribeEnsNetSaleDistrictResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var ensNetDistricts
     */
    public $ensNetDistricts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'ensNetDistricts' => 'EnsNetDistricts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ensNetDistricts) {
            $this->ensNetDistricts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->ensNetDistricts) {
            $res['EnsNetDistricts'] = null !== $this->ensNetDistricts ? $this->ensNetDistricts->toArray($noStream) : $this->ensNetDistricts;
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

        if (isset($map['EnsNetDistricts'])) {
            $model->ensNetDistricts = ensNetDistricts::fromMap($map['EnsNetDistricts']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
