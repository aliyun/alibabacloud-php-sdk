<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListTableDataByFormInstanceIdTableIdRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $formInstanceId;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var string
     */
    public $tableFieldId;
    protected $_name = [
        'appType' => 'AppType',
        'formInstanceId' => 'FormInstanceId',
        'formUuid' => 'FormUuid',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'systemToken' => 'SystemToken',
        'tableFieldId' => 'TableFieldId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        if (null !== $this->tableFieldId) {
            $res['TableFieldId'] = $this->tableFieldId;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        if (isset($map['TableFieldId'])) {
            $model->tableFieldId = $map['TableFieldId'];
        }

        return $model;
    }
}
