<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults;

use AlibabaCloud\Tea\Model;

class hintWordsInfoList extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $context;
    protected $_name = [
        'context' => 'Context',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hintWordsInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        return $model;
    }
}
