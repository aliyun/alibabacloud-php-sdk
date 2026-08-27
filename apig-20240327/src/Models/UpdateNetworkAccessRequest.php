<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateNetworkAccessRequest extends Model
{
    /**
     * @var string
     */
    public $networkAccessType;
    protected $_name = [
        'networkAccessType' => 'networkAccessType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAccessType) {
            $res['networkAccessType'] = $this->networkAccessType;
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
        if (isset($map['networkAccessType'])) {
            $model->networkAccessType = $map['networkAccessType'];
        }

        return $model;
    }
}
