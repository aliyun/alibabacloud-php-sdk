<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanResponseBody\dataQualityScan;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityScanResponseBody\dataQualityScan\computeResource\runtime;
use AlibabaCloud\Tea\Model;

class computeResource extends Model
{
    /**
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @example polardb_to_holo
     *
     * @var string
     */
    public $name;

    /**
     * @var runtime
     */
    public $runtime;
    protected $_name = [
        'envType' => 'EnvType',
        'name' => 'Name',
        'runtime' => 'Runtime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }

        return $model;
    }
}
