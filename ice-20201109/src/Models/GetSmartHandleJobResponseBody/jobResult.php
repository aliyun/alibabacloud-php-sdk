<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $aiResult;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $mediaUrl;
    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'aiResult' => 'AiResult',
        'mediaId'  => 'MediaId',
        'mediaUrl' => 'MediaUrl',
        'usage'    => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiResult) {
            $res['AiResult'] = $this->aiResult;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['AiResult'])) {
            $model->aiResult = $map['AiResult'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
