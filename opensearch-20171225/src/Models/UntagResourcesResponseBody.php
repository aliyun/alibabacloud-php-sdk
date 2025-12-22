<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $tequestId;
    protected $_name = [
        'tequestId' => 'tequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tequestId) {
            $res['tequestId'] = $this->tequestId;
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
        if (isset($map['tequestId'])) {
            $model->tequestId = $map['tequestId'];
        }

        return $model;
    }
}
