<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetAgentInstanceConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;
    protected $_name = [
        'attributesShrink' => 'attributes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['attributes'] = $this->attributesShrink;
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
        if (isset($map['attributes'])) {
            $model->attributesShrink = $map['attributes'];
        }

        return $model;
    }
}
