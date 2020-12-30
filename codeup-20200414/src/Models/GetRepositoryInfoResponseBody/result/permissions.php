<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result;

use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result\permissions\groupAccess;
use AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryInfoResponseBody\result\permissions\projectAccess;
use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var projectAccess
     */
    public $projectAccess;

    /**
     * @var groupAccess
     */
    public $groupAccess;
    protected $_name = [
        'projectAccess' => 'ProjectAccess',
        'groupAccess'   => 'GroupAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectAccess) {
            $res['ProjectAccess'] = null !== $this->projectAccess ? $this->projectAccess->toMap() : null;
        }
        if (null !== $this->groupAccess) {
            $res['GroupAccess'] = null !== $this->groupAccess ? $this->groupAccess->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectAccess'])) {
            $model->projectAccess = projectAccess::fromMap($map['ProjectAccess']);
        }
        if (isset($map['GroupAccess'])) {
            $model->groupAccess = groupAccess::fromMap($map['GroupAccess']);
        }

        return $model;
    }
}
