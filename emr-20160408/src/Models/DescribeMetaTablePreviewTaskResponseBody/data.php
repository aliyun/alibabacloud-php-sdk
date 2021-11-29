<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody\data\headers;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody\data\rows;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var headers
     */
    public $headers;

    /**
     * @var rows
     */
    public $rows;
    protected $_name = [
        'headers' => 'Headers',
        'rows'    => 'Rows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->rows) {
            $res['Rows'] = null !== $this->rows ? $this->rows->toMap() : null;
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
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['Rows'])) {
            $model->rows = rows::fromMap($map['Rows']);
        }

        return $model;
    }
}
