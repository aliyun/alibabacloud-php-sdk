<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateShortParamResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $shortParam;

    /**
     * @var string
     */
    public $paramDetail;
    protected $_name = [
        'phoneNumbers' => 'PhoneNumbers',
        'shortParam'   => 'ShortParam',
        'paramDetail'  => 'ParamDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->shortParam) {
            $res['ShortParam'] = $this->shortParam;
        }
        if (null !== $this->paramDetail) {
            $res['ParamDetail'] = $this->paramDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['ShortParam'])) {
            $model->shortParam = $map['ShortParam'];
        }
        if (isset($map['ParamDetail'])) {
            $model->paramDetail = $map['ParamDetail'];
        }

        return $model;
    }
}
