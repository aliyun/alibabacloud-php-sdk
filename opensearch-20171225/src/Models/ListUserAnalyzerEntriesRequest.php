<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListUserAnalyzerEntriesRequest extends Model
{
    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description kevintest
     *
     * @example kevintest
     *
     * @var string
     */
    public $word;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'word'       => 'word',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->word) {
            $res['word'] = $this->word;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserAnalyzerEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['word'])) {
            $model->word = $map['word'];
        }

        return $model;
    }
}
