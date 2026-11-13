<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListWebFilterTemplatesResponseBody\webFilterTemplates;

use AlibabaCloud\Dara\Model;

class ruleActionStatistics extends Model
{
    /**
     * @var int
     */
    public $alert;

    /**
     * @var int
     */
    public $allow;

    /**
     * @var int
     */
    public $deny;
    protected $_name = [
        'alert' => 'Alert',
        'allow' => 'Allow',
        'deny' => 'Deny',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = $this->alert;
        }

        if (null !== $this->allow) {
            $res['Allow'] = $this->allow;
        }

        if (null !== $this->deny) {
            $res['Deny'] = $this->deny;
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
        if (isset($map['Alert'])) {
            $model->alert = $map['Alert'];
        }

        if (isset($map['Allow'])) {
            $model->allow = $map['Allow'];
        }

        if (isset($map['Deny'])) {
            $model->deny = $map['Deny'];
        }

        return $model;
    }
}
