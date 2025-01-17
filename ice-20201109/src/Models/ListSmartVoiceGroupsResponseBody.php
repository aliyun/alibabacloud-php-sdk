<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups;

class ListSmartVoiceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var voiceGroups[]
     */
    public $voiceGroups;
    protected $_name = [
        'requestId'   => 'RequestId',
        'voiceGroups' => 'VoiceGroups',
    ];

    public function validate()
    {
        if (\is_array($this->voiceGroups)) {
            Model::validateArray($this->voiceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->voiceGroups) {
            if (\is_array($this->voiceGroups)) {
                $res['VoiceGroups'] = [];
                $n1                 = 0;
                foreach ($this->voiceGroups as $item1) {
                    $res['VoiceGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VoiceGroups'])) {
            if (!empty($map['VoiceGroups'])) {
                $model->voiceGroups = [];
                $n1                 = 0;
                foreach ($map['VoiceGroups'] as $item1) {
                    $model->voiceGroups[$n1++] = voiceGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
