<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\forbiddenList;

use AlibabaCloud\Dara\Model;

class mediaForbiddenReasonDTO extends Model
{
    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'mediaId' => 'MediaId',
        'reason' => 'Reason',
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

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
