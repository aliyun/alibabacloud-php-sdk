<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyCreateVerifySchemeResponseBody;

use AlibabaCloud\Tea\Model;

class gateVerifySchemeData extends Model
{
    /**
     * @var string
     */
    public $schemeCode;
    protected $_name = [
        'schemeCode' => 'SchemeCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeCode) {
            $res['SchemeCode'] = $this->schemeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gateVerifySchemeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemeCode'])) {
            $model->schemeCode = $map['SchemeCode'];
        }

        return $model;
    }
}
