<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @var string[]
     */
    public $header;
    protected $_name = [
        'header' => 'Header',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Header'])) {
            if (!empty($map['Header'])) {
                $model->header = $map['Header'];
            }
        }

        return $model;
    }
}
