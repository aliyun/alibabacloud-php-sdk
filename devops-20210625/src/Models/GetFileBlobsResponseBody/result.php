<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $size;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
