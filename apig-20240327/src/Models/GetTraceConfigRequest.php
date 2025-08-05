<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetTraceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
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
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        return $model;
    }
}
