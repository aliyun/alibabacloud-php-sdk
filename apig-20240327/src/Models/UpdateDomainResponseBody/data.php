<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateDomainResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deployRevisionId;
    protected $_name = [
        'deployRevisionId' => 'deployRevisionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployRevisionId) {
            $res['deployRevisionId'] = $this->deployRevisionId;
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
        if (isset($map['deployRevisionId'])) {
            $model->deployRevisionId = $map['deployRevisionId'];
        }

        return $model;
    }
}
