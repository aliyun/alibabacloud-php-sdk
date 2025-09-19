<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetUserLangResponseBody\sasUserLang;

class GetUserLangResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sasUserLang
     */
    public $sasUserLang;
    protected $_name = [
        'requestId' => 'RequestId',
        'sasUserLang' => 'SasUserLang',
    ];

    public function validate()
    {
        if (null !== $this->sasUserLang) {
            $this->sasUserLang->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sasUserLang) {
            $res['SasUserLang'] = null !== $this->sasUserLang ? $this->sasUserLang->toArray($noStream) : $this->sasUserLang;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SasUserLang'])) {
            $model->sasUserLang = sasUserLang::fromMap($map['SasUserLang']);
        }

        return $model;
    }
}
