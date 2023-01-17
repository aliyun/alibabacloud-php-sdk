<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval;

use AlibabaCloud\Tea\Model;

class httpCodeDataModule extends Model
{
    /**
     * @example 404
     *
     * @var string
     */
    public $code;

    /**
     * @example 16
     *
     * @var string
     */
    public $count;

    /**
     * @example 100
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
     * @return httpCodeDataModule
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
