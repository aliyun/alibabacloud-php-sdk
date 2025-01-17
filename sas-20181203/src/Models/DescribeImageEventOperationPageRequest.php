<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageEventOperationPageRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $eventKey;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $eventType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'eventKey'    => 'EventKey',
        'eventName'   => 'EventName',
        'eventType'   => 'EventType',
        'id'          => 'Id',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'source'      => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
