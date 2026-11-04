<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\DownloadAllTypeRecordingResponseBody\mediaDownloadParamList\mediaDownloadParam;

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
        if (\is_array($this->mediaDownloadParam)) {
            Model::validateArray($this->mediaDownloadParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaDownloadParam) {
            if (\is_array($this->mediaDownloadParam)) {
                $res['MediaDownloadParam'] = [];
                $n1 = 0;
                foreach ($this->mediaDownloadParam as $item1) {
                    $res['MediaDownloadParam'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaDownloadParam'])) {
            if (!empty($map['MediaDownloadParam'])) {
                $model->mediaDownloadParam = [];
                $n1 = 0;
                foreach ($map['MediaDownloadParam'] as $item1) {
                    $model->mediaDownloadParam[$n1] = mediaDownloadParam::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
