<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorTemplatesResponseBody\templates;
use AlibabaCloud\Tea\Model;

class ListCloudGtmMonitorTemplatesResponseBody extends Model
{
    /**
     * @description Current page number, starting from 1, default is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows per page when paginating queries, with a maximum value of 100 and a default of 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Unique request identification code.
     *
     * @example 75446CC1-FC9A-4595-8D96-089D73D7A63D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The health check templates.
     *
     * @var templates
     */
    public $templates;

    /**
     * @description Total number of health check template entries retrieved.
     *
     * @example 30
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description Total number of pages after data pagination.
     *
     * @example 2
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'templates' => 'Templates',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = null !== $this->templates ? $this->templates->toMap() : null;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmMonitorTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Templates'])) {
            $model->templates = templates::fromMap($map['Templates']);
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
