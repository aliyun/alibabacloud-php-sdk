<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class GetIntlFixPriceDomainListUrlRequest extends Model
{
    /**
     * @example 20240809
     *
     * @var string
     */
    public $listDate;
    protected $_name = [
        'listDate' => 'ListDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listDate) {
            $res['ListDate'] = $this->listDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIntlFixPriceDomainListUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListDate'])) {
            $model->listDate = $map['ListDate'];
        }

        return $model;
    }
}
