<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class SetRoutineSubdomainShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $subdomainsShrink;
    protected $_name = [
        'subdomainsShrink' => 'Subdomains',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subdomainsShrink) {
            $res['Subdomains'] = $this->subdomainsShrink;
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
        if (isset($map['Subdomains'])) {
            $model->subdomainsShrink = $map['Subdomains'];
        }

        return $model;
    }
}
