<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetYikePromptExpansionVoiceFixJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobResult extends Model
{
    /**
     * @var string
     */
    public $outputUrl;
    protected $_name = [
        'outputUrl' => 'OutputUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputUrl) {
            $res['OutputUrl'] = $this->outputUrl;
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
        if (isset($map['OutputUrl'])) {
            $model->outputUrl = $map['OutputUrl'];
        }

        return $model;
    }
}
