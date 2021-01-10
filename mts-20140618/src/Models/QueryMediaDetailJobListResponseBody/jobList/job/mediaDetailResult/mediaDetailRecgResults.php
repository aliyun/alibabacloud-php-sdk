<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult;
use AlibabaCloud\Tea\Model;

class mediaDetailRecgResults extends Model
{
    /**
     * @var mediaDetailRecgResult[]
     */
    public $mediaDetailRecgResult;
    protected $_name = [
        'mediaDetailRecgResult' => 'MediaDetailRecgResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaDetailRecgResult) {
            $res['MediaDetailRecgResult'] = [];
            if (null !== $this->mediaDetailRecgResult && \is_array($this->mediaDetailRecgResult)) {
                $n = 0;
                foreach ($this->mediaDetailRecgResult as $item) {
                    $res['MediaDetailRecgResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDetailRecgResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaDetailRecgResult'])) {
            if (!empty($map['MediaDetailRecgResult'])) {
                $model->mediaDetailRecgResult = [];
                $n                            = 0;
                foreach ($map['MediaDetailRecgResult'] as $item) {
                    $model->mediaDetailRecgResult[$n++] = null !== $item ? mediaDetailRecgResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
