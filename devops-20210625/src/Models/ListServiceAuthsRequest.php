<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListServiceAuthsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceAuthType;
    protected $_name = [
        'serviceAuthType' => 'serviceAuthType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceAuthType) {
            $res['serviceAuthType'] = $this->serviceAuthType;
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
        if (isset($map['serviceAuthType'])) {
            $model->serviceAuthType = $map['serviceAuthType'];
        }

        return $model;
    }
}
