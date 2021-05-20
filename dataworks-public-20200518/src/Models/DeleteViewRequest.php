<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteViewRequest extends Model
{
    /**
     * @var string
     */
    public $viewName;

    /**
     * @var string
     */
    public $appGuid;
    protected $_name = [
        'viewName' => 'ViewName',
        'appGuid'  => 'AppGuid',
    ];

    public function validate()
    {
        Model::validateRequired('viewName', $this->viewName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
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
        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }

        return $model;
    }
}
