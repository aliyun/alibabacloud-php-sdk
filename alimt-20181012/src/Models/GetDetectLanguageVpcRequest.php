<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Dara\Model;

class GetDetectLanguageVpcRequest extends Model
{
    /**
     * @var string
     */
    public $sourceText;
    protected $_name = [
        'sourceText' => 'SourceText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
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
        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }

        return $model;
    }
}
