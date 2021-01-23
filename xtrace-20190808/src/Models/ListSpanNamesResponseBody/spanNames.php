<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponseBody;

use AlibabaCloud\Tea\Model;

class spanNames extends Model
{
    /**
     * @var string[]
     */
    public $spanName;
    protected $_name = [
        'spanName' => 'SpanName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spanName) {
            $res['SpanName'] = $this->spanName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spanNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpanName'])) {
            if (!empty($map['SpanName'])) {
                $model->spanName = $map['SpanName'];
            }
        }

        return $model;
    }
}
