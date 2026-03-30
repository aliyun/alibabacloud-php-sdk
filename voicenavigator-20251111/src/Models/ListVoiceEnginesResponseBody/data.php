<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceEnginesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoiceEnginesResponseBody\data\voiceEngines;

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
     * @var voiceEngines[]
     */
    public $voiceEngines;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'voiceEngines' => 'VoiceEngines',
    ];

    public function validate()
    {
        if (\is_array($this->voiceEngines)) {
            Model::validateArray($this->voiceEngines);
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

        if (null !== $this->voiceEngines) {
            if (\is_array($this->voiceEngines)) {
                $res['VoiceEngines'] = [];
                $n1 = 0;
                foreach ($this->voiceEngines as $item1) {
                    $res['VoiceEngines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VoiceEngines'])) {
            if (!empty($map['VoiceEngines'])) {
                $model->voiceEngines = [];
                $n1 = 0;
                foreach ($map['VoiceEngines'] as $item1) {
                    $model->voiceEngines[$n1] = voiceEngines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
