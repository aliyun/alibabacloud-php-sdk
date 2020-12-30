<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponseBody\mediaDownloadParamList\mediaDownloadParam;
use AlibabaCloud\Tea\Model;

class mediaDownloadParamList extends Model
{
    /**
     * @var mediaDownloadParam[]
     */
    public $mediaDownloadParam;
    protected $_name = [
        'mediaDownloadParam' => 'MediaDownloadParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaDownloadParam) {
            $res['MediaDownloadParam'] = [];
            if (null !== $this->mediaDownloadParam && \is_array($this->mediaDownloadParam)) {
                $n = 0;
                foreach ($this->mediaDownloadParam as $item) {
                    $res['MediaDownloadParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDownloadParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaDownloadParam'])) {
            if (!empty($map['MediaDownloadParam'])) {
                $model->mediaDownloadParam = [];
                $n                         = 0;
                foreach ($map['MediaDownloadParam'] as $item) {
                    $model->mediaDownloadParam[$n++] = null !== $item ? mediaDownloadParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
