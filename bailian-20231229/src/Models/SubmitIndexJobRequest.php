<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class SubmitIndexJobRequest extends Model
{
    /**
     * @var string
     */
    public $indexId;
    protected $_name = [
        'indexId' => 'IndexId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
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
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        return $model;
    }
}
