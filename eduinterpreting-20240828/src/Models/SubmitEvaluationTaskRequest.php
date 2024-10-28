<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828\Models;

use AlibabaCloud\Tea\Model;

class SubmitEvaluationTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example http://xx.com/abc.mp3
     *
     * @var string
     */
    public $audioUrl;

    /**
     * @description This parameter is required.
     *
     * @example https://abc.edu.org.cn/en/callback
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description This parameter is required.
     *
     * @example As flame of fire we gather, as skyful of stars we scatter.
     *
     * @var string
     */
    public $materialText;

    /**
     * @description This parameter is required.
     *
     * @example 433c1361-0f6e-48fc-ad51
     *
     * @var string
     */
    public $outerBizId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $suggestedAnswer;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;

    /**
     * @description This parameter is required.
     *
     * @example EN_TO_ZH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'audioUrl'        => 'AudioUrl',
        'callbackUrl'     => 'CallbackUrl',
        'materialText'    => 'MaterialText',
        'outerBizId'      => 'OuterBizId',
        'suggestedAnswer' => 'SuggestedAnswer',
        'text'            => 'Text',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->materialText) {
            $res['MaterialText'] = $this->materialText;
        }
        if (null !== $this->outerBizId) {
            $res['OuterBizId'] = $this->outerBizId;
        }
        if (null !== $this->suggestedAnswer) {
            $res['SuggestedAnswer'] = $this->suggestedAnswer;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEvaluationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['MaterialText'])) {
            $model->materialText = $map['MaterialText'];
        }
        if (isset($map['OuterBizId'])) {
            $model->outerBizId = $map['OuterBizId'];
        }
        if (isset($map['SuggestedAnswer'])) {
            $model->suggestedAnswer = $map['SuggestedAnswer'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
