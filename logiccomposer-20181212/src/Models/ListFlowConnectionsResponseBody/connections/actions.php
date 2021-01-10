<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponseBody\connections;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $actionName;
    protected $_name = [
        'type'       => 'Type',
        'actionName' => 'ActionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        return $model;
    }
}
