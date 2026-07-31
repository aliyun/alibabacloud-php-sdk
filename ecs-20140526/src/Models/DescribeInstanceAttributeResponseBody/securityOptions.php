<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class securityOptions extends Model
{
    /**
     * @var bool
     */
    public $enableSecureBoot;
    protected $_name = [
        'enableSecureBoot' => 'EnableSecureBoot',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSecureBoot) {
            $res['EnableSecureBoot'] = $this->enableSecureBoot;
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
        if (isset($map['EnableSecureBoot'])) {
            $model->enableSecureBoot = $map['EnableSecureBoot'];
        }

        return $model;
    }
}
