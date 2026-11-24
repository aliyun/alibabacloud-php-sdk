<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session\translation\corpus;

class translation extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var corpus
     */
    public $corpus;
    protected $_name = [
        'language' => 'language',
        'corpus' => 'corpus',
    ];

    public function validate()
    {
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

        if (isset($map['corpus'])) {
            $model->corpus = corpus::fromMap($map['corpus']);
        }

        return $model;
    }
}
