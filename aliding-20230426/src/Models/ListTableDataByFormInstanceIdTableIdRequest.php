<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListTableDataByFormInstanceIdTableIdRequest extends Model
{
    /**
     * @example APP_PBKT0xxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example FORM_PBKT0xxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example FORM-xxxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example 1111
     *
     * @var string
     */
    public $tableFieldId;
    protected $_name = [
        'appType'        => 'AppType',
        'formInstanceId' => 'FormInstanceId',
        'formUuid'       => 'FormUuid',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'systemToken'    => 'SystemToken',
        'tableFieldId'   => 'TableFieldId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListTableDataByFormInstanceIdTableIdRequest
     */
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
