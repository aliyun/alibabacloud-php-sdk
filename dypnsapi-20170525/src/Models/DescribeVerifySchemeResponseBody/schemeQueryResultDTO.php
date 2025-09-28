<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\DescribeVerifySchemeResponseBody;

use AlibabaCloud\Dara\Model;

class schemeQueryResultDTO extends Model
{
    /**
     * @var string
     */
    public $appEncryptInfo;
    protected $_name = [
        'appEncryptInfo' => 'AppEncryptInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEncryptInfo) {
            $res['AppEncryptInfo'] = $this->appEncryptInfo;
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
        if (isset($map['AppEncryptInfo'])) {
            $model->appEncryptInfo = $map['AppEncryptInfo'];
        }

        return $model;
    }
}
