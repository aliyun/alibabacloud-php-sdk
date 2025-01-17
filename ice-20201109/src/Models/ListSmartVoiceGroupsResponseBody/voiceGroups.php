<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponseBody\voiceGroups\voiceList;

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
        if (\is_array($this->voiceList)) {
            Model::validateArray($this->voiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->voiceList) {
            if (\is_array($this->voiceList)) {
                $res['VoiceList'] = [];
                $n1               = 0;
                foreach ($this->voiceList as $item1) {
                    $res['VoiceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VoiceList'])) {
            if (!empty($map['VoiceList'])) {
                $model->voiceList = [];
                $n1               = 0;
                foreach ($map['VoiceList'] as $item1) {
                    $model->voiceList[$n1++] = voiceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
