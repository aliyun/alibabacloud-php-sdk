<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartAuditResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class errorItemDetails extends Model
{
    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $context;

    /**
     * @var int
     */
    public $contextOffset;

    /**
     * @var int
     */
    public $errorLevel;

    /**
     * @var string
     */
    public $errorWord;

    /**
     * @var string
     */
    public $majorCode;

    /**
     * @var string
     */
    public $majorCodeDesc;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $rightWord;

    /**
     * @var string
     */
    public $subClassCode;

    /**
     * @var string
     */
    public $subClassDesc;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'checkId' => 'CheckId',
        'context' => 'Context',
        'contextOffset' => 'ContextOffset',
        'errorLevel' => 'ErrorLevel',
        'errorWord' => 'ErrorWord',
        'majorCode' => 'MajorCode',
        'majorCodeDesc' => 'MajorCodeDesc',
        'offset' => 'Offset',
        'reason' => 'Reason',
        'rightWord' => 'RightWord',
        'subClassCode' => 'SubClassCode',
        'subClassDesc' => 'SubClassDesc',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->contextOffset) {
            $res['ContextOffset'] = $this->contextOffset;
        }

        if (null !== $this->errorLevel) {
            $res['ErrorLevel'] = $this->errorLevel;
        }

        if (null !== $this->errorWord) {
            $res['ErrorWord'] = $this->errorWord;
        }

        if (null !== $this->majorCode) {
            $res['MajorCode'] = $this->majorCode;
        }

        if (null !== $this->majorCodeDesc) {
            $res['MajorCodeDesc'] = $this->majorCodeDesc;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->rightWord) {
            $res['RightWord'] = $this->rightWord;
        }

        if (null !== $this->subClassCode) {
            $res['SubClassCode'] = $this->subClassCode;
        }

        if (null !== $this->subClassDesc) {
            $res['SubClassDesc'] = $this->subClassDesc;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['ContextOffset'])) {
            $model->contextOffset = $map['ContextOffset'];
        }

        if (isset($map['ErrorLevel'])) {
            $model->errorLevel = $map['ErrorLevel'];
        }

        if (isset($map['ErrorWord'])) {
            $model->errorWord = $map['ErrorWord'];
        }

        if (isset($map['MajorCode'])) {
            $model->majorCode = $map['MajorCode'];
        }

        if (isset($map['MajorCodeDesc'])) {
            $model->majorCodeDesc = $map['MajorCodeDesc'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RightWord'])) {
            $model->rightWord = $map['RightWord'];
        }

        if (isset($map['SubClassCode'])) {
            $model->subClassCode = $map['SubClassCode'];
        }

        if (isset($map['SubClassDesc'])) {
            $model->subClassDesc = $map['SubClassDesc'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
