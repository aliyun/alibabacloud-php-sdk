<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteViewRequest extends Model
{
    /**
     * @var string
     */
    public $appGuid;

    /**
     * @var string
     */
    public $viewName;
    protected $_name = [
        'appGuid'  => 'AppGuid',
        'viewName' => 'ViewName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
