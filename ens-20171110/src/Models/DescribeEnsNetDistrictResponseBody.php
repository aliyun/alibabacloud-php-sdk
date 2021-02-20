<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponseBody\ensNetDistricts;
use AlibabaCloud\Tea\Model;

class DescribeEnsNetDistrictResponseBody extends Model
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
        'code'            => 'Code',
        'ensNetDistricts' => 'EnsNetDistricts',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensNetDistricts) {
            $res['EnsNetDistricts'] = null !== $this->ensNetDistricts ? $this->ensNetDistricts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsNetDistrictResponseBody
     */
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
