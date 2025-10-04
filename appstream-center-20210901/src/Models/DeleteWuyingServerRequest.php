<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteWuyingServerRequest extends Model
{
    /**
     * @var string
     */
    public $wuyingServerId;
    protected $_name = [
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
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
        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        return $model;
    }
}
