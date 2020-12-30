<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetDownloadUrlsResponseBody\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $photoIdStr;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $photoId;
    protected $_name = [
        'photoIdStr'  => 'PhotoIdStr',
        'downloadUrl' => 'DownloadUrl',
        'code'        => 'Code',
        'message'     => 'Message',
        'photoId'     => 'PhotoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->photoIdStr) {
            $res['PhotoIdStr'] = $this->photoIdStr;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotoIdStr'])) {
            $model->photoIdStr = $map['PhotoIdStr'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PhotoId'])) {
            $model->photoId = $map['PhotoId'];
        }

        return $model;
    }
}
