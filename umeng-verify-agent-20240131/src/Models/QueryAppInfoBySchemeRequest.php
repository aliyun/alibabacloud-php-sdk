<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengverifyagent\V20240131\Models;

use AlibabaCloud\Tea\Model;

class QueryAppInfoBySchemeRequest extends Model
{
    /**
     * @var string
     */
    public $schemeCode;
    protected $_name = [
        'schemeCode' => 'schemeCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeCode) {
            $res['schemeCode'] = $this->schemeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAppInfoBySchemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schemeCode'])) {
            $model->schemeCode = $map['schemeCode'];
        }

        return $model;
    }
}
