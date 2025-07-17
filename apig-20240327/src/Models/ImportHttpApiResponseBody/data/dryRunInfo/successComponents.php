<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;

use AlibabaCloud\Tea\Model;

class successComponents extends Model
{
    /**
     * @description The action that will be performed for the data struct after the dry run.
     *
     *   Create: The data struct is created.
     *   Update: The data struct is updated.
     *
     * @example Create
     *
     * @var string
     */
    public $action;

    /**
     * @description The data struct name.
     *
     * @example userDTO
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'action' => 'action',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
