<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeResponseBody;

use AlibabaCloud\Dara\Model;

class gateVerifySchemeDTO extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->schemeCode) {
            $res['SchemeCode'] = $this->schemeCode;
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
        if (isset($map['SchemeCode'])) {
            $model->schemeCode = $map['SchemeCode'];
        }

        return $model;
    }
}
