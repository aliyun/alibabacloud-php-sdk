<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceAccessProfileResponseBody\data\voiceAccessProfiles;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var voiceAccessProfiles[]
     */
    public $voiceAccessProfiles;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'voiceAccessProfiles' => 'VoiceAccessProfiles',
    ];

    public function validate()
    {
        if (\is_array($this->voiceAccessProfiles)) {
            Model::validateArray($this->voiceAccessProfiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->voiceAccessProfiles) {
            if (\is_array($this->voiceAccessProfiles)) {
                $res['VoiceAccessProfiles'] = [];
                $n1 = 0;
                foreach ($this->voiceAccessProfiles as $item1) {
                    $res['VoiceAccessProfiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VoiceAccessProfiles'])) {
            if (!empty($map['VoiceAccessProfiles'])) {
                $model->voiceAccessProfiles = [];
                $n1 = 0;
                foreach ($map['VoiceAccessProfiles'] as $item1) {
                    $model->voiceAccessProfiles[$n1] = voiceAccessProfiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
