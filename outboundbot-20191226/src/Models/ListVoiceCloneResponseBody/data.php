<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListVoiceCloneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListVoiceCloneResponseBody\data\voiceClones;

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
     * @var voiceClones[]
     */
    public $voiceClones;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'voiceClones' => 'VoiceClones',
    ];

    public function validate()
    {
        if (\is_array($this->voiceClones)) {
            Model::validateArray($this->voiceClones);
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

        if (null !== $this->voiceClones) {
            if (\is_array($this->voiceClones)) {
                $res['VoiceClones'] = [];
                $n1 = 0;
                foreach ($this->voiceClones as $item1) {
                    $res['VoiceClones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['VoiceClones'])) {
            if (!empty($map['VoiceClones'])) {
                $model->voiceClones = [];
                $n1 = 0;
                foreach ($map['VoiceClones'] as $item1) {
                    $model->voiceClones[$n1] = voiceClones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
