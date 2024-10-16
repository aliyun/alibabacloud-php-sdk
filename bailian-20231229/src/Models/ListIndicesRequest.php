<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ListIndicesRequest extends Model
{
    /**
     * @description The name of the knowledge base. You can query knowledge base by name. The name must be 1 to 20 characters in length and can contain characters classified as letter in Unicode, including English letters, Chinese characters, digits, among others. The name can also contain colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is left empty by default, which means that all knowledge bases in the specified workspace are queried.
     * @example idx_status_score
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The number of the pages to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of knowledge bases to display on each page. No maximum value. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'indexName'  => 'IndexName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
