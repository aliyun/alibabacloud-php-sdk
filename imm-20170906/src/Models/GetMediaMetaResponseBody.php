<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta;
use AlibabaCloud\Tea\Model;

class GetMediaMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $mediaUri;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaMeta
     */
    public $mediaMeta;
    protected $_name = [
        'mediaUri'  => 'MediaUri',
        'requestId' => 'RequestId',
        'mediaMeta' => 'MediaMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaUri) {
            $res['MediaUri'] = $this->mediaUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaMeta) {
            $res['MediaMeta'] = null !== $this->mediaMeta ? $this->mediaMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaUri'])) {
            $model->mediaUri = $map['MediaUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaMeta'])) {
            $model->mediaMeta = mediaMeta::fromMap($map['MediaMeta']);
        }

        return $model;
    }
}
