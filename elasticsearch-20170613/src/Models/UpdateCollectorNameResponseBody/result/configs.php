<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The content of the file.
     *
     * @example - key: log\n title: Log file content\n description: >\n Contains log file lines.\n ....
     *
     * @var string
     */
    public $content;

    /**
     * @description The name of the file.
     *
     * @example fields.yml
     *
     * @var string
     */
    public $fileName;
    protected $_name = [
        'content'  => 'content',
        'fileName' => 'fileName',
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
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
