<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponseBody\customTemplateList\frontendHint;

use AlibabaCloud\Dara\Model;

class transcodeTemplateHint extends Model
{
    /**
     * @var string
     */
    public $bitrateControlType;
    protected $_name = [
        'bitrateControlType' => 'BitrateControlType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrateControlType) {
            $res['BitrateControlType'] = $this->bitrateControlType;
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
        if (isset($map['BitrateControlType'])) {
            $model->bitrateControlType = $map['BitrateControlType'];
        }

        return $model;
    }
}
