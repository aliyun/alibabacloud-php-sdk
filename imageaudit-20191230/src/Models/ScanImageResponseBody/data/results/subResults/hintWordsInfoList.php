<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults;

use AlibabaCloud\Dara\Model;

class hintWordsInfoList extends Model
{
    /**
     * @var string
     */
    public $context;
    protected $_name = [
        'context' => 'Context',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
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
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        return $model;
    }
}
