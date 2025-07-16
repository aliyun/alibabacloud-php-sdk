<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsRequest\filter;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class ListMultiDimTableRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 101114
     *
     * @var string
     */
    public $baseId;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAUUg5QSTWwHyeElt8z5z4Qo=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $sheetIdOrName;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'baseId' => 'BaseId',
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'sheetIdOrName' => 'SheetIdOrName',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->sheetIdOrName) {
            $res['SheetIdOrName'] = $this->sheetIdOrName;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMultiDimTableRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['SheetIdOrName'])) {
            $model->sheetIdOrName = $map['SheetIdOrName'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
