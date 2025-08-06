<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsResponseBody\mediaRefreshJobs;

class GetMediaRefreshJobsResponseBody extends Model
{
    /**
     * @var mediaRefreshJobs[]
     */
    public $mediaRefreshJobs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaRefreshJobs' => 'MediaRefreshJobs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaRefreshJobs)) {
            Model::validateArray($this->mediaRefreshJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaRefreshJobs) {
            if (\is_array($this->mediaRefreshJobs)) {
                $res['MediaRefreshJobs'] = [];
                $n1 = 0;
                foreach ($this->mediaRefreshJobs as $item1) {
                    $res['MediaRefreshJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaRefreshJobs'])) {
            if (!empty($map['MediaRefreshJobs'])) {
                $model->mediaRefreshJobs = [];
                $n1 = 0;
                foreach ($map['MediaRefreshJobs'] as $item1) {
                    $model->mediaRefreshJobs[$n1] = mediaRefreshJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
