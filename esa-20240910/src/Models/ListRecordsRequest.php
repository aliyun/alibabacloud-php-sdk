<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $bizName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $proxied;

    /**
     * @var string
     */
    public $recordMatchType;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizName' => 'BizName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'proxied' => 'Proxied',
        'recordMatchType' => 'RecordMatchType',
        'recordName' => 'RecordName',
        'siteId' => 'SiteId',
        'sourceType' => 'SourceType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->proxied) {
            $res['Proxied'] = $this->proxied;
        }

        if (null !== $this->recordMatchType) {
            $res['RecordMatchType'] = $this->recordMatchType;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Proxied'])) {
            $model->proxied = $map['Proxied'];
        }

        if (isset($map['RecordMatchType'])) {
            $model->recordMatchType = $map['RecordMatchType'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
