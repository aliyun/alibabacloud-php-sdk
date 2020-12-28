<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\CloneConfigurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class successItems extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'dataId' => 'DataId',
        'group'  => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
