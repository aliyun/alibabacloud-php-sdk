<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList\frontendHint\transcodeTemplateHint;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeTemplateHint) {
            $res['TranscodeTemplateHint'] = null !== $this->transcodeTemplateHint ? $this->transcodeTemplateHint->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontendHint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeTemplateHint'])) {
            $model->transcodeTemplateHint = transcodeTemplateHint::fromMap($map['TranscodeTemplateHint']);
        }

        return $model;
    }
}
