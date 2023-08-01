<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var audioResult
     */
    public $audioResult;

    /**
     * @example product_content-2055763
     *
     * @var string
     */
    public $dataId;

    /**
     * @var frameResult
     */
    public $frameResult;

    /**
     * @example liveId
     *
     * @var string
     */
    public $liveId;
    protected $_name = [
        'audioResult' => 'AudioResult',
        'dataId'      => 'DataId',
        'frameResult' => 'FrameResult',
        'liveId'      => 'LiveId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioResult) {
            $res['AudioResult'] = null !== $this->audioResult ? $this->audioResult->toMap() : null;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->frameResult) {
            $res['FrameResult'] = null !== $this->frameResult ? $this->frameResult->toMap() : null;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
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
        if (isset($map['AudioResult'])) {
            $model->audioResult = audioResult::fromMap($map['AudioResult']);
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['FrameResult'])) {
            $model->frameResult = frameResult::fromMap($map['FrameResult']);
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        return $model;
    }
}
