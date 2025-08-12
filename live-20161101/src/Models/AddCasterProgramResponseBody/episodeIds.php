<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterProgramResponseBody\episodeIds\episodeId;

class episodeIds extends Model
{
    /**
     * @var episodeId[]
     */
    public $episodeId;
    protected $_name = [
        'episodeId' => 'EpisodeId',
    ];

    public function validate()
    {
        if (\is_array($this->episodeId)) {
            Model::validateArray($this->episodeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->episodeId) {
            if (\is_array($this->episodeId)) {
                $res['EpisodeId'] = [];
                $n1 = 0;
                foreach ($this->episodeId as $item1) {
                    $res['EpisodeId'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EpisodeId'])) {
            if (!empty($map['EpisodeId'])) {
                $model->episodeId = [];
                $n1 = 0;
                foreach ($map['EpisodeId'] as $item1) {
                    $model->episodeId[$n1] = episodeId::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
