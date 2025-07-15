<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The transcoding template. A value of origin indicates that the stream is a source stream.
     *
     * @example origin
     *
     * @var string
     */
    public $transcodeTemplate;

    /**
     * @description The number of online users for the stream, which can be a source stream or transcoded stream.
     *
     * @example 1
     *
     * @var int
     */
    public $userNumber;
    protected $_name = [
        'transcodeTemplate' => 'TranscodeTemplate',
        'userNumber' => 'UserNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeTemplate) {
            $res['TranscodeTemplate'] = $this->transcodeTemplate;
        }
        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeTemplate'])) {
            $model->transcodeTemplate = $map['TranscodeTemplate'];
        }
        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
