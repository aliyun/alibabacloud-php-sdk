<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\Dara\Model;

class ttsConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int[]
     */
    public $filterBrackets;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $pitch;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'filterBrackets' => 'FilterBrackets',
        'name' => 'Name',
        'pitch' => 'Pitch',
        'rate' => 'Rate',
        'vendor' => 'Vendor',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (\is_array($this->filterBrackets)) {
            Model::validateArray($this->filterBrackets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->filterBrackets) {
            if (\is_array($this->filterBrackets)) {
                $res['FilterBrackets'] = [];
                $n1 = 0;
                foreach ($this->filterBrackets as $item1) {
                    $res['FilterBrackets'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['FilterBrackets'])) {
            if (!empty($map['FilterBrackets'])) {
                $model->filterBrackets = [];
                $n1 = 0;
                foreach ($map['FilterBrackets'] as $item1) {
                    $model->filterBrackets[$n1] = $item1;
                    ++$n1;
                }
            }
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
