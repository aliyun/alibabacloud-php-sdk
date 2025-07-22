<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class ttsConfig extends Model
{
    /**
     * @example N5448VFGI2mXJU8a/A03VQ==
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
     * @example Tts
     *
     * @var string
     */
    public $name;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $pitch;

    /**
     * @example 50
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
     * @example longwan
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
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return ttsConfig
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
