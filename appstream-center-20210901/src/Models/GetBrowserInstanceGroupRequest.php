<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetBrowserInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $browserInstanceGroupId;
    protected $_name = [
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
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
        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        return $model;
    }
}
