<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Dara\Model;

class userDefinePolicy extends Model
{
    /**
     * @var string
     */
    public $customConfig;
    protected $_name = [
        'customConfig' => 'CustomConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customConfig) {
            $res['CustomConfig'] = $this->customConfig;
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
        if (isset($map['CustomConfig'])) {
            $model->customConfig = $map['CustomConfig'];
        }

        return $model;
    }
}
