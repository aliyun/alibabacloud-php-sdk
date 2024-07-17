<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyFileRequest extends Model
{
    /**
     * @description The file content.
     *
     * @example ""
     *
     * @var string
     */
    public $content;

    /**
     * @description The number of shards.
     *
     * @example ds=20220713
     *
     * @var int
     */
    public $partition;

    /**
     * @description The name of the file in the full path
     *
     * This parameter is required.
     * @example /schemas/generation_schema.json
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'content'   => 'content',
        'partition' => 'partition',
        'fileName'  => 'fileName',
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
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFileRequest
     */
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
