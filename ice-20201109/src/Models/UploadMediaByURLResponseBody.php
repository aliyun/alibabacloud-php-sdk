<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponseBody\uploadJobs;
use AlibabaCloud\Tea\Model;

class UploadMediaByURLResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ****83B7-7F87-4792-BFE9-63CD2137****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about upload jobs.
     *
     * @var uploadJobs[]
     */
    public $uploadJobs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'uploadJobs' => 'UploadJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadJobs) {
            $res['UploadJobs'] = [];
            if (null !== $this->uploadJobs && \is_array($this->uploadJobs)) {
                $n = 0;
                foreach ($this->uploadJobs as $item) {
                    $res['UploadJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadJobs'])) {
            if (!empty($map['UploadJobs'])) {
                $model->uploadJobs = [];
                $n                 = 0;
                foreach ($map['UploadJobs'] as $item) {
                    $model->uploadJobs[$n++] = null !== $item ? uploadJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
