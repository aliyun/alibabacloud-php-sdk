<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data\lawResult\lawDomain;

class lawResult extends Model
{
    /**
     * @var lawDomain
     */
    public $lawDomain;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'lawDomain' => 'lawDomain',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
        if (null !== $this->lawDomain) {
            $this->lawDomain->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lawDomain) {
            $res['lawDomain'] = null !== $this->lawDomain ? $this->lawDomain->toArray($noStream) : $this->lawDomain;
        }

        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
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
        if (isset($map['lawDomain'])) {
            $model->lawDomain = lawDomain::fromMap($map['lawDomain']);
        }

        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
