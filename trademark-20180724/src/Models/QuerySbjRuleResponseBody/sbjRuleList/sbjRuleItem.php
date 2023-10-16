<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList\sbjRuleItem\frontendOptions;
use AlibabaCloud\Tea\Model;

class sbjRuleItem extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $espExtFieldName;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var frontendOptions
     */
    public $frontendOptions;

    /**
     * @var string
     */
    public $frontendType;

    /**
     * @var string
     */
    public $requiredExpression;

    /**
     * @var string
     */
    public $sbjFieldId;

    /**
     * @var string
     */
    public $showExpression;

    /**
     * @var string
     */
    public $trademarkServiceExpression;

    /**
     * @var string
     */
    public $validateRegularExpression;
    protected $_name = [
        'defaultValue'               => 'DefaultValue',
        'espExtFieldName'            => 'EspExtFieldName',
        'fieldName'                  => 'FieldName',
        'fileType'                   => 'FileType',
        'frontendOptions'            => 'FrontendOptions',
        'frontendType'               => 'FrontendType',
        'requiredExpression'         => 'RequiredExpression',
        'sbjFieldId'                 => 'SbjFieldId',
        'showExpression'             => 'ShowExpression',
        'trademarkServiceExpression' => 'TrademarkServiceExpression',
        'validateRegularExpression'  => 'ValidateRegularExpression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->espExtFieldName) {
            $res['EspExtFieldName'] = $this->espExtFieldName;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->frontendOptions) {
            $res['FrontendOptions'] = null !== $this->frontendOptions ? $this->frontendOptions->toMap() : null;
        }
        if (null !== $this->frontendType) {
            $res['FrontendType'] = $this->frontendType;
        }
        if (null !== $this->requiredExpression) {
            $res['RequiredExpression'] = $this->requiredExpression;
        }
        if (null !== $this->sbjFieldId) {
            $res['SbjFieldId'] = $this->sbjFieldId;
        }
        if (null !== $this->showExpression) {
            $res['ShowExpression'] = $this->showExpression;
        }
        if (null !== $this->trademarkServiceExpression) {
            $res['TrademarkServiceExpression'] = $this->trademarkServiceExpression;
        }
        if (null !== $this->validateRegularExpression) {
            $res['ValidateRegularExpression'] = $this->validateRegularExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sbjRuleItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['EspExtFieldName'])) {
            $model->espExtFieldName = $map['EspExtFieldName'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FrontendOptions'])) {
            $model->frontendOptions = frontendOptions::fromMap($map['FrontendOptions']);
        }
        if (isset($map['FrontendType'])) {
            $model->frontendType = $map['FrontendType'];
        }
        if (isset($map['RequiredExpression'])) {
            $model->requiredExpression = $map['RequiredExpression'];
        }
        if (isset($map['SbjFieldId'])) {
            $model->sbjFieldId = $map['SbjFieldId'];
        }
        if (isset($map['ShowExpression'])) {
            $model->showExpression = $map['ShowExpression'];
        }
        if (isset($map['TrademarkServiceExpression'])) {
            $model->trademarkServiceExpression = $map['TrademarkServiceExpression'];
        }
        if (isset($map['ValidateRegularExpression'])) {
            $model->validateRegularExpression = $map['ValidateRegularExpression'];
        }

        return $model;
    }
}
