<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody;

use AlibabaCloud\Dara\Model;

class regularExpressList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var int
     */
    public $inputOutputType;

    /**
     * @var int
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $matchAndReplace;

    /**
     * @var string
     */
    public $regularExpress;

    /**
     * @var int
     */
    public $regularExpressId;

    /**
     * @var string
     */
    public $regularExpressName;
    protected $_name = [
        'actionType' => 'ActionType',
        'inputOutputType' => 'InputOutputType',
        'isEnabled' => 'IsEnabled',
        'matchAndReplace' => 'MatchAndReplace',
        'regularExpress' => 'RegularExpress',
        'regularExpressId' => 'RegularExpressId',
        'regularExpressName' => 'RegularExpressName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->inputOutputType) {
            $res['InputOutputType'] = $this->inputOutputType;
        }

        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->matchAndReplace) {
            $res['MatchAndReplace'] = $this->matchAndReplace;
        }

        if (null !== $this->regularExpress) {
            $res['RegularExpress'] = $this->regularExpress;
        }

        if (null !== $this->regularExpressId) {
            $res['RegularExpressId'] = $this->regularExpressId;
        }

        if (null !== $this->regularExpressName) {
            $res['RegularExpressName'] = $this->regularExpressName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['InputOutputType'])) {
            $model->inputOutputType = $map['InputOutputType'];
        }

        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['MatchAndReplace'])) {
            $model->matchAndReplace = $map['MatchAndReplace'];
        }

        if (isset($map['RegularExpress'])) {
            $model->regularExpress = $map['RegularExpress'];
        }

        if (isset($map['RegularExpressId'])) {
            $model->regularExpressId = $map['RegularExpressId'];
        }

        if (isset($map['RegularExpressName'])) {
            $model->regularExpressName = $map['RegularExpressName'];
        }

        return $model;
    }
}
