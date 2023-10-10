<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class QuerySlsLogStoreListRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example af58edcf-f7eb-****-****-db4e425f****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of the page to return. Pages start from Page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 1000
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of data that is collected by Log Service. Valid values:
     *
     *   file: the file type
     *   stdout: the standard output type
     *
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appId'       => 'AppId',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySlsLogStoreListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
