<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList\frontendHint\transcodeTemplateHint;

class frontendHint extends Model
{
    /**
     * @var transcodeTemplateHint
     */
    public $transcodeTemplateHint;
    protected $_name = [
        'transcodeTemplateHint' => 'TranscodeTemplateHint',
    ];

    public function validate()
    {
        if (null !== $this->transcodeTemplateHint) {
            $this->transcodeTemplateHint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transcodeTemplateHint) {
            $res['TranscodeTemplateHint'] = null !== $this->transcodeTemplateHint ? $this->transcodeTemplateHint->toArray($noStream) : $this->transcodeTemplateHint;
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
        if (isset($map['TranscodeTemplateHint'])) {
            $model->transcodeTemplateHint = transcodeTemplateHint::fromMap($map['TranscodeTemplateHint']);
        }

        return $model;
    }
}
