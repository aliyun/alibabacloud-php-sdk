<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData\value;

use AlibabaCloud\Tea\Model;

class realTimeCodeProportionData extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of times the HTTP status code was returned.
     *
     * @example 20
     *
     * @var string
     */
    public $count;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @example 66.046511627907
     *
     * @var string
     */
    public $proportion;
    protected $_name = [
        'code' => 'Code',
        'count' => 'Count',
        'proportion' => 'Proportion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->proportion) {
            $res['Proportion'] = $this->proportion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeCodeProportionData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Proportion'])) {
            $model->proportion = $map['Proportion'];
        }

        return $model;
    }
}
