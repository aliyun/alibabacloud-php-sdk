<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideosResponseBody\videos;
use AlibabaCloud\Tea\Model;

class ListVideosResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var videos[]
     */
    public $videos;
    protected $_name = [
        'nextMarker' => 'NextMarker',
        'requestId'  => 'RequestId',
        'setId'      => 'SetId',
        'videos'     => 'Videos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->videos) {
            $res['Videos'] = [];
            if (null !== $this->videos && \is_array($this->videos)) {
                $n = 0;
                foreach ($this->videos as $item) {
                    $res['Videos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVideosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['Videos'])) {
            if (!empty($map['Videos'])) {
                $model->videos = [];
                $n             = 0;
                foreach ($map['Videos'] as $item) {
                    $model->videos[$n++] = null !== $item ? videos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
