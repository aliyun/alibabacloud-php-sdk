<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\tags;
use AlibabaCloud\Tea\Model;

class mediaDetailResult extends Model
{
    /**
     * @var mediaDetailRecgResults
     */
    public $mediaDetailRecgResults;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'mediaDetailRecgResults' => 'MediaDetailRecgResults',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaDetailRecgResults) {
            $res['MediaDetailRecgResults'] = null !== $this->mediaDetailRecgResults ? $this->mediaDetailRecgResults->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDetailResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaDetailRecgResults'])) {
            $model->mediaDetailRecgResults = mediaDetailRecgResults::fromMap($map['MediaDetailRecgResults']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
