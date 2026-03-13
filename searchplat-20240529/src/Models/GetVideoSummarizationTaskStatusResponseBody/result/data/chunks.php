<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result\data\chunks\metadata;

class chunks extends Model
{
    /**
     * @var string
     */
    public $enhancedTranscript;

    /**
     * @var int
     */
    public $index;

    /**
     * @var metadata
     */
    public $metadata;
    protected $_name = [
        'enhancedTranscript' => 'enhanced_transcript',
        'index' => 'index',
        'metadata' => 'metadata',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enhancedTranscript) {
            $res['enhanced_transcript'] = $this->enhancedTranscript;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
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
        if (isset($map['enhanced_transcript'])) {
            $model->enhancedTranscript = $map['enhanced_transcript'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        return $model;
    }
}
