<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ModifyFileRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $partition;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'content' => 'content',
        'partition' => 'partition',
        'fileName' => 'fileName',
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

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
