<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel;

use AlibabaCloud\Dara\Model;

class nodePool extends Model
{
    /**
     * @var string
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $nodeUsed;
    protected $_name = [
        'nodeAmount' => 'NodeAmount',
        'nodeUsed' => 'NodeUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->nodeUsed) {
            $res['NodeUsed'] = $this->nodeUsed;
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
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }

        if (isset($map['NodeUsed'])) {
            $model->nodeUsed = $map['NodeUsed'];
        }

        return $model;
    }
}
