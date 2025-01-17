<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponseBody\uploadJobs;

class UploadMediaByURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var uploadJobs[]
     */
    public $uploadJobs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'uploadJobs' => 'UploadJobs',
    ];

    public function validate()
    {
        if (\is_array($this->uploadJobs)) {
            Model::validateArray($this->uploadJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadJobs) {
            if (\is_array($this->uploadJobs)) {
                $res['UploadJobs'] = [];
                $n1                = 0;
                foreach ($this->uploadJobs as $item1) {
                    $res['UploadJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadJobs'])) {
            if (!empty($map['UploadJobs'])) {
                $model->uploadJobs = [];
                $n1                = 0;
                foreach ($map['UploadJobs'] as $item1) {
                    $model->uploadJobs[$n1++] = uploadJobs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
