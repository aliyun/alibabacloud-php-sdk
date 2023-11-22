<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups\voiceList;
use AlibabaCloud\Tea\Model;

class voiceGroups extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var voiceList[]
     */
    public $voiceList;
    protected $_name = [
        'type'      => 'Type',
        'voiceList' => 'VoiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->voiceList) {
            $res['VoiceList'] = [];
            if (null !== $this->voiceList && \is_array($this->voiceList)) {
                $n = 0;
                foreach ($this->voiceList as $item) {
                    $res['VoiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return voiceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VoiceList'])) {
            if (!empty($map['VoiceList'])) {
                $model->voiceList = [];
                $n                = 0;
                foreach ($map['VoiceList'] as $item) {
                    $model->voiceList[$n++] = null !== $item ? voiceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
