<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class JSONOutput extends Model
{
    /**
     * @var string
     */
    public $recordDelimiter;
    protected $_name = [
        'recordDelimiter' => 'RecordDelimiter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordDelimiter) {
            $res['RecordDelimiter'] = $this->recordDelimiter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JSONOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordDelimiter'])) {
            $model->recordDelimiter = $map['RecordDelimiter'];
        }

        return $model;
    }
}
