<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class QueryCoreWordsRequest extends Model
{
    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $synonym;
    protected $_name = [
        'coreWordName' => 'CoreWordName',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'synonym'      => 'Synonym',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->synonym) {
            $res['Synonym'] = $this->synonym;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCoreWordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Synonym'])) {
            $model->synonym = $map['Synonym'];
        }

        return $model;
    }
}
