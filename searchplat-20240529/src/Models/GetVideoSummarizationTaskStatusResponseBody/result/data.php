<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result\data\chunks;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result\data\videoMetadata;

class data extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @var videoMetadata
     */
    public $videoMetadata;
    protected $_name = [
        'chunks' => 'chunks',
        'videoMetadata' => 'video_metadata',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        if (null !== $this->videoMetadata) {
            $this->videoMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoMetadata) {
            $res['video_metadata'] = null !== $this->videoMetadata ? $this->videoMetadata->toArray($noStream) : $this->videoMetadata;
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['chunks'] as $item1) {
                    $model->chunks[$n1] = chunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['video_metadata'])) {
            $model->videoMetadata = videoMetadata::fromMap($map['video_metadata']);
        }

        return $model;
    }
}
