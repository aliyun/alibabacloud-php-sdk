<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\translation\corpus;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\translation\sameLanguageSkipOptions;

class translation extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var sameLanguageSkipOptions
     */
    public $sameLanguageSkipOptions;

    /**
     * @var corpus
     */
    public $corpus;
    protected $_name = [
        'language' => 'language',
        'sameLanguageSkipOptions' => 'same_language_skip_options',
        'corpus' => 'corpus',
    ];

    public function validate()
    {
        if (null !== $this->sameLanguageSkipOptions) {
            $this->sameLanguageSkipOptions->validate();
        }
        if (null !== $this->corpus) {
            $this->corpus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->sameLanguageSkipOptions) {
            $res['same_language_skip_options'] = null !== $this->sameLanguageSkipOptions ? $this->sameLanguageSkipOptions->toArray($noStream) : $this->sameLanguageSkipOptions;
        }

        if (null !== $this->corpus) {
            $res['corpus'] = null !== $this->corpus ? $this->corpus->toArray($noStream) : $this->corpus;
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
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['same_language_skip_options'])) {
            $model->sameLanguageSkipOptions = sameLanguageSkipOptions::fromMap($map['same_language_skip_options']);
        }

        if (isset($map['corpus'])) {
            $model->corpus = corpus::fromMap($map['corpus']);
        }

        return $model;
    }
}
