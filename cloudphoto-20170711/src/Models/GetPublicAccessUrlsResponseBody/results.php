<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPublicAccessUrlsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $photoIdStr;

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

    /**
     * @var string
     */
    public $accessUrl;
    protected $_name = [
        'photoIdStr' => 'PhotoIdStr',
        'code'       => 'Code',
        'message'    => 'Message',
        'photoId'    => 'PhotoId',
        'accessUrl'  => 'AccessUrl',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->photoId) {
            $res['PhotoId'] = $this->photoId;
        }
        if (null !== $this->accessUrl) {
            $res['AccessUrl'] = $this->accessUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhotoIdStr'])) {
            $model->photoIdStr = $map['PhotoIdStr'];
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
        if (isset($map['AccessUrl'])) {
            $model->accessUrl = $map['AccessUrl'];
        }

        return $model;
    }
}
