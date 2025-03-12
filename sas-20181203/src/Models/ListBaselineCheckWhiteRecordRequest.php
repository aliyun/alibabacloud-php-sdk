<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListBaselineCheckWhiteRecordRequest extends Model
{
    /**
     * @description The IDs of check items.
     *
     * @var int[]
     */
    public $checkIds;

    /**
     * @description The name of the check item. Fuzzy match is supported.
     *
     * @example redis
     *
     * @var string
     */
    public $checkItemFuzzy;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of the whitelist rules.
     *
     * @var int[]
     */
    public $recordIds;

    /**
     * @description The data source. If you leave this parameter empty, the default value is used. Valid values:
     *
     *   **default**: server
     *   **agentless**: agentless detection
     *
     * @example agentless
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'checkIds'       => 'CheckIds',
        'checkItemFuzzy' => 'CheckItemFuzzy',
        'currentPage'    => 'CurrentPage',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'recordIds'      => 'RecordIds',
        'source'         => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->checkItemFuzzy) {
            $res['CheckItemFuzzy'] = $this->checkItemFuzzy;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recordIds) {
            $res['RecordIds'] = $this->recordIds;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBaselineCheckWhiteRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }
        if (isset($map['CheckItemFuzzy'])) {
            $model->checkItemFuzzy = $map['CheckItemFuzzy'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = $map['RecordIds'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
