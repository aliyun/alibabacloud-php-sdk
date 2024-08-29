<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateSqlInstanceRequest extends Model
{
    /**
     * @description The number of compute units (CUs). When you use the Dedicated SQL feature, CUs are used in parallel.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $cu;

    /**
     * @description Specifies whether to enable the Dedicated SQL feature for the project. If you set this parameter to true, the Dedicated SQL feature is enabled for the specified project and takes effect for all query statements that you execute in the project, including the query statements for alerts and dashboards.
     *
     * This parameter is required.
     * @var bool
     */
    public $useAsDefault;
    protected $_name = [
        'cu'           => 'cu',
        'useAsDefault' => 'useAsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->useAsDefault) {
            $res['useAsDefault'] = $this->useAsDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSqlInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }
        if (isset($map['useAsDefault'])) {
            $model->useAsDefault = $map['useAsDefault'];
        }

        return $model;
    }
}
