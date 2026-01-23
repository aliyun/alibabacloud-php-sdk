<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\RuleInfo;

use AlibabaCloud\Dara\Model;

class preqRule extends Model
{
    /**
     * @var string
     */
    public $rid;
    protected $_name = [
        'rid' => 'Rid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
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
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
