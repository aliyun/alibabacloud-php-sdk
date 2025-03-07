<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRecordTemplatesRequest extends Model
{
    /**
     * @description The search keyword. You can use the template ID or name as the keyword to search for templates. If you search for templates by name, fuzzy match is supported.
     *
     * @example test template
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The page number. Minimum value: 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   asc: sorts the query results in ascending order.
     *   desc: sorts the query results in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $templateIds;

    /**
     * @description The type of the template.
     *
     * Valid values:
     *
     *   system
     *   custom
     *
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'keyword'     => 'Keyword',
        'pageNo'      => 'PageNo',
        'pageSize'    => 'PageSize',
        'sortBy'      => 'SortBy',
        'templateIds' => 'TemplateIds',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRecordTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
