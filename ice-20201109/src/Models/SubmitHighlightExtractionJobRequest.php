<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitHighlightExtractionJobRequest extends Model
{
    /**
     * @example ****12e8864746a0a398****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {
     * "MediaArray": [{
     * "MediaId": "ceb72f00e****1ef8216e7e6c64a6302"
     * }, {
     * "MediaId": "ce450c40e****1ef8216e7e6c64a6302"
     * }, {
     * "MediaId": "ce49a020e****1ef81c1e6f6d5686302"
     * }, {
     * "MediaId": "d047e120e****1ef81c1e6f6d5686302"
     * }, {
     * "MediaId": "cfe2ddc0e****1ef81c1e6f6d5686302"
     * }
     * @var string
     */
    public $inputConfig;

    /**
     * @example {
     * }
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'inputConfig'  => 'InputConfig',
        'outputConfig' => 'OutputConfig',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->inputConfig) {
            $res['InputConfig'] = $this->inputConfig;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitHighlightExtractionJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InputConfig'])) {
            $model->inputConfig = $map['InputConfig'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
