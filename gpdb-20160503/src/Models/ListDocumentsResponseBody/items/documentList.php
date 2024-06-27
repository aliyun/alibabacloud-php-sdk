<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponseBody\items;

use AlibabaCloud\Tea\Model;

class documentList extends Model
{
    /**
     * @description The name of the document.
     *
     * @example music.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The source of the document.
     *
     * @example http://oss.xxx/music.txt
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'fileName' => 'FileName',
        'source'   => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
