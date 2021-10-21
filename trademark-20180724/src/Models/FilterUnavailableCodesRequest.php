<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class FilterUnavailableCodesRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $codes;
    protected $_name = [
        'codes' => 'Codes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codes) {
            $res['Codes'] = $this->codes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FilterUnavailableCodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            $model->codes = $map['Codes'];
        }

        return $model;
    }
}
