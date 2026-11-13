<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateWebFilterRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $rulesShrink;

    /**
     * @var string
     */
    public $webFilterTemplateId;
    protected $_name = [
        'rulesShrink' => 'Rules',
        'webFilterTemplateId' => 'WebFilterTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
        }

        if (null !== $this->webFilterTemplateId) {
            $res['WebFilterTemplateId'] = $this->webFilterTemplateId;
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
        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        if (isset($map['WebFilterTemplateId'])) {
            $model->webFilterTemplateId = $map['WebFilterTemplateId'];
        }

        return $model;
    }
}
