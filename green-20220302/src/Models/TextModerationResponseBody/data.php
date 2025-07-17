<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 123456
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the moderated object.
     *
     * @example text1234
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The description of the labels.
     *
     * @example no risk
     *
     * @var string
     */
    public $descriptions;

    /**
     * @description The device ID.
     *
     * @example xxxxxx
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The labels. Multiple labels are separated by commas (,). Valid values: ad: ad violation profanity: abuse contraband: contraband sexual_content: pornography violence: violence nonsense: irrigation spam: spam negative_content: undesirable content cyberbullying: cyberbullying C_customized: custom library that is hit
     *
     * @example porn
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @description The JSON string used to locate the cause. Valid values: riskTips: subcategory label riskWords: risk words adNums: hit advertising number customizedWords: customized words customizedLibs: customized libraries
     *
     * @example {\\"detectedLanguage\\":\\"ar\\",\\"riskTips\\":\\"sexuality_Suggestive\\",\\"riskWords\\":\\"pxxxxy\\",\\"translatedContent\\":\\"pxxxxy sxxxx\\"}
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'accountId' => 'accountId',
        'dataId' => 'dataId',
        'descriptions' => 'descriptions',
        'deviceId' => 'deviceId',
        'labels' => 'labels',
        'manualTaskId' => 'manualTaskId',
        'reason' => 'reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }
        if (null !== $this->descriptions) {
            $res['descriptions'] = $this->descriptions;
        }
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->manualTaskId) {
            $res['manualTaskId'] = $this->manualTaskId;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }
        if (isset($map['descriptions'])) {
            $model->descriptions = $map['descriptions'];
        }
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['manualTaskId'])) {
            $model->manualTaskId = $map['manualTaskId'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
