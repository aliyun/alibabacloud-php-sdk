<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @example spark pi is 3.14\\n
     *
     * @var string
     */
    public $lineContent;
    protected $_name = [
        'lineContent' => 'LineContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineContent) {
            $res['LineContent'] = $this->lineContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineContent'])) {
            $model->lineContent = $map['LineContent'];
        }

        return $model;
    }
}
