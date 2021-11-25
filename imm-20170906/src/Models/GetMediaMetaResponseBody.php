<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta;
use AlibabaCloud\Tea\Model;

class GetMediaMetaResponseBody extends Model
{
    /**
     * @var mediaMeta
     */
    public $mediaMeta;

    /**
     * @var string
     */
    public $mediaUri;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaMeta' => 'MediaMeta',
        'mediaUri'  => 'MediaUri',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaMeta) {
            $res['MediaMeta'] = null !== $this->mediaMeta ? $this->mediaMeta->toMap() : null;
        }
        if (null !== $this->mediaUri) {
            $res['MediaUri'] = $this->mediaUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaMeta'])) {
            $model->mediaMeta = mediaMeta::fromMap($map['MediaMeta']);
        }
        if (isset($map['MediaUri'])) {
            $model->mediaUri = $map['MediaUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
