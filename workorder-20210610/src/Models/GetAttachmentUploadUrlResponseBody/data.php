<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models\GetAttachmentUploadUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $getSignedUrl;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $putSignedUrl;
    protected $_name = [
        'getSignedUrl' => 'GetSignedUrl',
        'objectKey'    => 'ObjectKey',
        'putSignedUrl' => 'PutSignedUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->getSignedUrl) {
            $res['GetSignedUrl'] = $this->getSignedUrl;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->putSignedUrl) {
            $res['PutSignedUrl'] = $this->putSignedUrl;
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
        if (isset($map['GetSignedUrl'])) {
            $model->getSignedUrl = $map['GetSignedUrl'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['PutSignedUrl'])) {
            $model->putSignedUrl = $map['PutSignedUrl'];
        }

        return $model;
    }
}
