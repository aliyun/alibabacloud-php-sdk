<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels\policy;

use AlibabaCloud\Dara\Model;

class clipboardPolicy extends Model
{
    /**
     * @var string
     */
    public $clipboard;
    protected $_name = [
        'clipboard' => 'Clipboard',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
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
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        return $model;
    }
}
