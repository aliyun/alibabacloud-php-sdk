<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ConfigSetCancelRelationFromAddressRequest extends Model
{
    /**
     * @var string
     */
    public $fromAddress;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'fromAddress' => 'FromAddress',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromAddress) {
            $res['FromAddress'] = $this->fromAddress;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['FromAddress'])) {
            $model->fromAddress = $map['FromAddress'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
