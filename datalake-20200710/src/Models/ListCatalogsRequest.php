<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListCatalogsRequest extends Model
{
    /**
     * @example .*
     *
     * @var string
     */
    public $idPattern;

    /**
     * @example ‘’
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'idPattern'     => 'IdPattern',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idPattern) {
            $res['IdPattern'] = $this->idPattern;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCatalogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdPattern'])) {
            $model->idPattern = $map['IdPattern'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
