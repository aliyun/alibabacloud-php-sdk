<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest;

use AlibabaCloud\Dara\Model;

class headParams extends Model
{
    /**
     * @var string
     */
    public $paramKey;
    /**
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'paramKey'   => 'ParamKey',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramKey) {
            $res['ParamKey'] = $this->paramKey;
        }

        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
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
        if (isset($map['ParamKey'])) {
            $model->paramKey = $map['ParamKey'];
        }

        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
