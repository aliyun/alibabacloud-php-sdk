<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class VideoInsightsCaptionConfig extends Model
{
    /**
     * @var PersonReferenceConfig
     */
    public $personReference;
    protected $_name = [
        'personReference' => 'PersonReference',
    ];

    public function validate()
    {
        if (null !== $this->personReference) {
            $this->personReference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->personReference) {
            $res['PersonReference'] = null !== $this->personReference ? $this->personReference->toArray($noStream) : $this->personReference;
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
        if (isset($map['PersonReference'])) {
            $model->personReference = PersonReferenceConfig::fromMap($map['PersonReference']);
        }

        return $model;
    }
}
