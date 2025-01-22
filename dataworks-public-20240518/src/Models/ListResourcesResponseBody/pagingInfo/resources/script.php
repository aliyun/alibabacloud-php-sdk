<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\script\runtime;

class script extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $path;
    /**
     * @var runtime
     */
    public $runtime;
    protected $_name = [
        'id'      => 'Id',
        'path'    => 'Path',
        'runtime' => 'Runtime',
    ];

    public function validate()
    {
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
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
