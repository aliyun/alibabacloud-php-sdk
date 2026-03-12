<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class GrayPublishRequest extends Model
{
    /**
     * @var string
     */
    public $xRequestChangeId;
    protected $_name = [
        'xRequestChangeId' => 'X-Request-ChangeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xRequestChangeId) {
            $res['X-Request-ChangeId'] = $this->xRequestChangeId;
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
        if (isset($map['X-Request-ChangeId'])) {
            $model->xRequestChangeId = $map['X-Request-ChangeId'];
        }

        return $model;
    }
}
