<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Tea\Model;

class TTSConfig extends Model
{
    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $apiKey;

    /**
     * @var int[]
     */
    public $filterBrackets;

    /**
     * @example cosyvoice-v1
     *
     * @var string
     */
    public $model;

    /**
     * @example 1
     *
     * @var float
     */
    public $pitch;

    /**
     * @example 1
     *
     * @var float
     */
    public $rate;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $vendor;

    /**
     * @example longxiaoxia
     *
     * @var string
     */
    public $voice;

    /**
     * @example 50
     *
     * @var int
     */
    public $volume;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'filterBrackets' => 'FilterBrackets',
        'model' => 'Model',
        'pitch' => 'Pitch',
        'rate' => 'Rate',
        'vendor' => 'Vendor',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }
        if (null !== $this->filterBrackets) {
            $res['FilterBrackets'] = $this->filterBrackets;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->pitch) {
            $res['Pitch'] = $this->pitch;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TTSConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }
        if (isset($map['FilterBrackets'])) {
            if (!empty($map['FilterBrackets'])) {
                $model->filterBrackets = $map['FilterBrackets'];
            }
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Pitch'])) {
            $model->pitch = $map['Pitch'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
