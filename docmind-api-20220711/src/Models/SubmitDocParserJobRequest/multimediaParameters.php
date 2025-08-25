<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobRequest;

use AlibabaCloud\Dara\Model;

class multimediaParameters extends Model
{
    /**
     * @var bool
     */
    public $enableSynopsisParse;

    /**
     * @var string
     */
    public $vlParsePrompt;
    protected $_name = [
        'enableSynopsisParse' => 'EnableSynopsisParse',
        'vlParsePrompt' => 'VlParsePrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSynopsisParse) {
            $res['EnableSynopsisParse'] = $this->enableSynopsisParse;
        }

        if (null !== $this->vlParsePrompt) {
            $res['VlParsePrompt'] = $this->vlParsePrompt;
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
        if (isset($map['EnableSynopsisParse'])) {
            $model->enableSynopsisParse = $map['EnableSynopsisParse'];
        }

        if (isset($map['VlParsePrompt'])) {
            $model->vlParsePrompt = $map['VlParsePrompt'];
        }

        return $model;
    }
}
