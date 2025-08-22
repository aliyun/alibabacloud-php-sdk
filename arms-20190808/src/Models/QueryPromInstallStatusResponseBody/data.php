<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\QueryPromInstallStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isControllerInstalled;
    protected $_name = [
        'isControllerInstalled' => 'isControllerInstalled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isControllerInstalled) {
            $res['isControllerInstalled'] = $this->isControllerInstalled;
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
        if (isset($map['isControllerInstalled'])) {
            $model->isControllerInstalled = $map['isControllerInstalled'];
        }

        return $model;
    }
}
