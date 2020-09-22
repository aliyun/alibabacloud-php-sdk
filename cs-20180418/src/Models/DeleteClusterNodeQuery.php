<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterNodeQuery extends Model
{
    /**
     * @var string
     */
    public $force;

    /**
     * @var string
     */
    public $releaseInstance;
    protected $_name = [
        'force'           => 'force',
        'releaseInstance' => 'releaseInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['force'] = $this->force;
        }
        if (null !== $this->releaseInstance) {
            $res['releaseInstance'] = $this->releaseInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterNodeQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }
        if (isset($map['releaseInstance'])) {
            $model->releaseInstance = $map['releaseInstance'];
        }

        return $model;
    }
}
