<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainRealTimeHttpCodeDataResponseBody\realTimeHttpCodeData\usageData\value;

use AlibabaCloud\Tea\Model;

class realTimeCodeProportionData extends Model
{
    /**
     * @example 111111
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var string
     */
    public $count;

    /**
     * @example 0.01155980271270037
     *
     * @var string
     */
    public $proportion;
    protected $_name = [
        'code'       => 'Code',
        'count'      => 'Count',
        'proportion' => 'Proportion',
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
