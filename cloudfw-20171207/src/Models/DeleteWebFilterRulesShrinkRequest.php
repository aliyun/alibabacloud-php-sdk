<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteWebFilterRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $webFilterRuleIdsShrink;
    protected $_name = [
        'webFilterRuleIdsShrink' => 'WebFilterRuleIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webFilterRuleIdsShrink) {
            $res['WebFilterRuleIds'] = $this->webFilterRuleIdsShrink;
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
        if (isset($map['WebFilterRuleIds'])) {
            $model->webFilterRuleIdsShrink = $map['WebFilterRuleIds'];
        }

        return $model;
    }
}
