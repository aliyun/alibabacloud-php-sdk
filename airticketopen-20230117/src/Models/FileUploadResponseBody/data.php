<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FileUploadResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://fliggy-flight-jinghang-bucket.oss-cn-zhangjiakou.aliyuncs.com/suez/flight_suez_9a634376****47.jpeg
     *
     * @var string
     */
    public $uploadedFileUrl;
    protected $_name = [
        'uploadedFileUrl' => 'uploaded_file_url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadedFileUrl) {
            $res['uploaded_file_url'] = $this->uploadedFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['uploaded_file_url'])) {
            $model->uploadedFileUrl = $map['uploaded_file_url'];
        }

        return $model;
    }
}
