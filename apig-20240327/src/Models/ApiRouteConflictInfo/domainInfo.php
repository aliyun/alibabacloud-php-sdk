<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo;

use AlibabaCloud\Dara\Model;

class domainInfo extends Model
{
    /**
     * @var string
     */
    public $domainId;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'domainId' => 'domainId',
        'name'     => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domainId'] = $this->domainId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['domainId'])) {
            $model->domainId = $map['domainId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
