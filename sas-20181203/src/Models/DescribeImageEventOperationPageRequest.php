<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageEventOperationPageRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The keyword of the alert item.
     *
     * @example PEM
     *
     * @var string
     */
    public $eventKey;

    /**
     * @description The name of the alert item.
     *
     * @example PEM
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The alert type.
     *
     *   Set the value to **sensitiveFile**.
     *
     * @example sensitiveFile
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the alert handling rule.
     *
     * @example 49616
     *
     * @var int
     */
    public $id;

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
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'eventKey'    => 'EventKey',
        'eventName'   => 'EventName',
        'eventType'   => 'EventType',
        'id'          => 'Id',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->eventKey) {
            $res['EventKey'] = $this->eventKey;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageEventOperationPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EventKey'])) {
            $model->eventKey = $map['EventKey'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
