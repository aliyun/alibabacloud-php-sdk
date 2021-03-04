<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListSecretsRequest extends Model
{
    /**
     * @var string
     */
    public $fetchTags;

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
    public $filters;
    protected $_name = [
        'fetchTags'  => 'FetchTags',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'filters'    => 'Filters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fetchTags) {
            $res['FetchTags'] = $this->fetchTags;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchTags'])) {
            $model->fetchTags = $map['FetchTags'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }

        return $model;
    }
}
