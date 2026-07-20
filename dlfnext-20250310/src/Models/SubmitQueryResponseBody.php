<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class SubmitQueryResponseBody extends Model
{
    /**
     * @var string
     */
    public $queryId;
    protected $_name = [
        'queryId' => 'queryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['queryId'] = $this->queryId;
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
        if (isset($map['queryId'])) {
            $model->queryId = $map['queryId'];
        }

        return $model;
    }
}
