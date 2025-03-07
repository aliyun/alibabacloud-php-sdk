<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups;
use AlibabaCloud\Tea\Model;

class ListSmartVoiceGroupsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 627B30EB-1D0A-5C6D-8467-431626E0FA10
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried speaker groups.
     *
     * @var voiceGroups[]
     */
    public $voiceGroups;
    protected $_name = [
        'requestId'   => 'RequestId',
        'voiceGroups' => 'VoiceGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->voiceGroups) {
            $res['VoiceGroups'] = [];
            if (null !== $this->voiceGroups && \is_array($this->voiceGroups)) {
                $n = 0;
                foreach ($this->voiceGroups as $item) {
                    $res['VoiceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartVoiceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VoiceGroups'])) {
            if (!empty($map['VoiceGroups'])) {
                $model->voiceGroups = [];
                $n                  = 0;
                foreach ($map['VoiceGroups'] as $item) {
                    $model->voiceGroups[$n++] = null !== $item ? voiceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
