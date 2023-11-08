<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SearchEmployeeFieldValuesRequest extends Model
{
    /**
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $createFromTimeGMT;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $createToTimeGMT;

    /**
     * @example FORM-EF6Yxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $modifiedFromTimeGMT;

    /**
     * @example 2021-09-10
     *
     * @var string
     */
    public $modifiedToTimeGMT;

    /**
     * @example 112212221
     *
     * @var string
     */
    public $originatorId;

    /**
     * @example {\"textField_annandfa\":\"1212\"}
     *
     * @var string
     */
    public $searchFieldJson;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example [\"textField_xahdfna\"]
     *
     * @var string
     */
    public $targetFieldJson;
    protected $_name = [
        'appType'             => 'AppType',
        'createFromTimeGMT'   => 'CreateFromTimeGMT',
        'createToTimeGMT'     => 'CreateToTimeGMT',
        'formUuid'            => 'FormUuid',
        'language'            => 'Language',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT'   => 'ModifiedToTimeGMT',
        'originatorId'        => 'OriginatorId',
        'searchFieldJson'     => 'SearchFieldJson',
        'systemToken'         => 'SystemToken',
        'targetFieldJson'     => 'TargetFieldJson',
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
        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }
        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->modifiedFromTimeGMT) {
            $res['ModifiedFromTimeGMT'] = $this->modifiedFromTimeGMT;
        }
        if (null !== $this->modifiedToTimeGMT) {
            $res['ModifiedToTimeGMT'] = $this->modifiedToTimeGMT;
        }
        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }
        if (null !== $this->searchFieldJson) {
            $res['SearchFieldJson'] = $this->searchFieldJson;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->targetFieldJson) {
            $res['TargetFieldJson'] = $this->targetFieldJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEmployeeFieldValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }
        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }
        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ModifiedFromTimeGMT'])) {
            $model->modifiedFromTimeGMT = $map['ModifiedFromTimeGMT'];
        }
        if (isset($map['ModifiedToTimeGMT'])) {
            $model->modifiedToTimeGMT = $map['ModifiedToTimeGMT'];
        }
        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }
        if (isset($map['SearchFieldJson'])) {
            $model->searchFieldJson = $map['SearchFieldJson'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['TargetFieldJson'])) {
            $model->targetFieldJson = $map['TargetFieldJson'];
        }

        return $model;
    }
}
