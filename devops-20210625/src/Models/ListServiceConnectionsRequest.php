<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListServiceConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $sericeConnectionType;
    protected $_name = [
        'sericeConnectionType' => 'sericeConnectionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sericeConnectionType) {
            $res['sericeConnectionType'] = $this->sericeConnectionType;
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
        if (isset($map['sericeConnectionType'])) {
            $model->sericeConnectionType = $map['sericeConnectionType'];
        }

        return $model;
    }
}
