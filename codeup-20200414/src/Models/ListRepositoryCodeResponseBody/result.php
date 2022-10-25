<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCodeResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryCodeResponseBody\result\source;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var mixed[]
     */
    public $highlightTextMap;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'docId'            => 'DocId',
        'highlightTextMap' => 'HighlightTextMap',
        'source'           => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->highlightTextMap) {
            $res['HighlightTextMap'] = $this->highlightTextMap;
        }
        if (null !== $this->source) {
            $res['Source'] = null !== $this->source ? $this->source->toMap() : null;
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
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['HighlightTextMap'])) {
            $model->highlightTextMap = $map['HighlightTextMap'];
        }
        if (isset($map['Source'])) {
            $model->source = source::fromMap($map['Source']);
        }

        return $model;
    }
}
