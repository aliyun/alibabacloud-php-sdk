<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $homeShrink;
    protected $_name = [
        'homeShrink' => 'Home',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->homeShrink) {
            $res['Home'] = $this->homeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRulesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Home'])) {
            $model->homeShrink = $map['Home'];
        }

        return $model;
    }
}
