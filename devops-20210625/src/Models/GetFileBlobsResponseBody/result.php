<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $size;

    /**
     * @example 65535
     *
     * @var int
     */
    public $totalLines;
    protected $_name = [
        'content'    => 'content',
        'size'       => 'size',
        'totalLines' => 'totalLines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->totalLines) {
            $res['totalLines'] = $this->totalLines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['totalLines'])) {
            $model->totalLines = $map['totalLines'];
        }

        return $model;
    }
}
