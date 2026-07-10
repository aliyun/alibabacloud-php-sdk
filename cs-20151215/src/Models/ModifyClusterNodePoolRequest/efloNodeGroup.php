<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;

class efloNodeGroup extends Model
{
    /**
     * @var string
     */
    public $autoAttachEnabled;
    protected $_name = [
        'autoAttachEnabled' => 'auto_attach_enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoAttachEnabled) {
            $res['auto_attach_enabled'] = $this->autoAttachEnabled;
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
        if (isset($map['auto_attach_enabled'])) {
            $model->autoAttachEnabled = $map['auto_attach_enabled'];
        }

        return $model;
    }
}
