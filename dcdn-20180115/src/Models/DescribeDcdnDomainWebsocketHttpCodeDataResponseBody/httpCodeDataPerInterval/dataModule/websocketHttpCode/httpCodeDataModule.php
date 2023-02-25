<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval\dataModule\websocketHttpCode;

use AlibabaCloud\Tea\Model;

class httpCodeDataModule extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 404
     *
     * @var int
     */
    public $code;

    /**
     * @description The total number of times that the HTTP status code was returned.
     *
     * @example 16
     *
     * @var float
     */
    public $count;

    /**
     * @description The proportion of the HTTP status code.
     *
     * @example 100
     *
     * @var float
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
