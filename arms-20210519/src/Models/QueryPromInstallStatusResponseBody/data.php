<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models\QueryPromInstallStatusResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isControllerInstalled) {
            $res['isControllerInstalled'] = $this->isControllerInstalled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isControllerInstalled'])) {
            $model->isControllerInstalled = $map['isControllerInstalled'];
        }

        return $model;
    }
}
