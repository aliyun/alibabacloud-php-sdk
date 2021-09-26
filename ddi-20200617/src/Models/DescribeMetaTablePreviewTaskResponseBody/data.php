<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponseBody\data\headers;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponseBody\data\rows;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var rows
     */
    public $rows;

    /**
     * @var headers
     */
    public $headers;
    protected $_name = [
        'rows'    => 'Rows',
        'headers' => 'Headers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rows) {
            $res['Rows'] = null !== $this->rows ? $this->rows->toMap() : null;
        }
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rows'])) {
            $model->rows = rows::fromMap($map['Rows']);
        }
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }

        return $model;
    }
}
