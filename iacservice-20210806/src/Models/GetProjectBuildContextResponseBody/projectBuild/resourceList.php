<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildContextResponseBody\projectBuild;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @var string[]
     */
    public $info;

    /**
     * @var int
     */
    public $resourceCnt;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'info'         => 'info',
        'resourceCnt'  => 'resourceCnt',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['info'] = $this->info;
        }
        if (null !== $this->resourceCnt) {
            $res['resourceCnt'] = $this->resourceCnt;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['info'])) {
            $model->info = $map['info'];
        }
        if (isset($map['resourceCnt'])) {
            $model->resourceCnt = $map['resourceCnt'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
