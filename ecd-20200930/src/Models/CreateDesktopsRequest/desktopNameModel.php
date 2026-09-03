<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Dara\Model;

class desktopNameModel extends Model
{
    /**
     * @var bool
     */
    public $desktopNameIsSuffix;
    protected $_name = [
        'desktopNameIsSuffix' => 'DesktopNameIsSuffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopNameIsSuffix) {
            $res['DesktopNameIsSuffix'] = $this->desktopNameIsSuffix;
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
        if (isset($map['DesktopNameIsSuffix'])) {
            $model->desktopNameIsSuffix = $map['DesktopNameIsSuffix'];
        }

        return $model;
    }
}
