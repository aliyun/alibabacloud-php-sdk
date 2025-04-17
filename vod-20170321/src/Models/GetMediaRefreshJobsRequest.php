<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetMediaRefreshJobsRequest extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaRefreshJobId;
    protected $_name = [
        'mediaId' => 'MediaId',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }

        return $model;
    }
}
