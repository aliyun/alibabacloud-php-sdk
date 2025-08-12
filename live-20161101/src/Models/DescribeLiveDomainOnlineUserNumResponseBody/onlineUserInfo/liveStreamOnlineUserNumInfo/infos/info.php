<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainOnlineUserNumResponseBody\onlineUserInfo\liveStreamOnlineUserNumInfo\infos;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $transcodeTemplate;

    /**
     * @var int
     */
    public $userNumber;
    protected $_name = [
        'transcodeTemplate' => 'TranscodeTemplate',
        'userNumber' => 'UserNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
