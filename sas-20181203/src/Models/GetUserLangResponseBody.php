<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetUserLangResponseBody\sasUserLang;
use AlibabaCloud\Tea\Model;

class GetUserLangResponseBody extends Model
{
    /**
     * @example 23AD0BD2-8771-5647-819E-6BA51E21****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sasUserLang
     */
    public $sasUserLang;
    protected $_name = [
        'requestId'   => 'RequestId',
        'sasUserLang' => 'SasUserLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasUserLang) {
            $res['SasUserLang'] = null !== $this->sasUserLang ? $this->sasUserLang->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserLangResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasUserLang'])) {
            $model->sasUserLang = sasUserLang::fromMap($map['SasUserLang']);
        }

        return $model;
    }
}
