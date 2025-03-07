<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListLiveSnapshotTemplatesRequest extends Model
{
    /**
     * @description The page number. Valid values: [1,n). Default value: 1.
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
     * @description The search keyword. You can use the template ID or name as the keyword to search for templates. If you search for templates by name, fuzzy match is supported.
     *
     *   It cannot exceed 128 characters in length.
     *
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $searchKeyWord;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * Valid values:
     *
     *   asc: sorts the query results by creation time in ascending order.
     *   desc: sorts the query results by creation time in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The template IDs.
     *
     *   If you specify the SearchKeyWord parameter, this condition does not take effect.
     *   The maximum length of the array is 200.
     *
     * @var string[]
     */
    public $templateIds;

    /**
     * @description The type of the template. By default, all types are queried.
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
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'searchKeyWord' => 'SearchKeyWord',
        'sortBy'        => 'SortBy',
        'templateIds'   => 'TemplateIds',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKeyWord) {
            $res['SearchKeyWord'] = $this->searchKeyWord;
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
     * @return ListLiveSnapshotTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKeyWord'])) {
            $model->searchKeyWord = $map['SearchKeyWord'];
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
