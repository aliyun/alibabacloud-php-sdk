<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessRelateMaliciousRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the event.
     *
     * @example 80****
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese.
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The scenarios of batch handling. Valid values:
     *
     *   same_file_md5: the same MD5 hash value.
     *   default: the same alert type. This is the default value.
     *
     * @example default
     *
     * @var string
     */
    public $scenario;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'eventId'     => 'EventId',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'scenario'    => 'Scenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessRelateMaliciousRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        return $model;
    }
}
