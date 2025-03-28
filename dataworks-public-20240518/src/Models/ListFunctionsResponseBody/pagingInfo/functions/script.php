<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\script\runtime;
use AlibabaCloud\Tea\Model;

class script extends Model
{
    /**
     * @description The script ID.
     *
     * @example 652567824470354XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The script path.
     *
     * @example XXX/OpenAPI/function/function_name
     *
     * @var string
     */
    public $path;

    /**
     * @description The runtime.
     *
     * @var runtime
     */
    public $runtime;
    protected $_name = [
        'id' => 'Id',
        'path' => 'Path',
        'runtime' => 'Runtime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }

        return $model;
    }
}
