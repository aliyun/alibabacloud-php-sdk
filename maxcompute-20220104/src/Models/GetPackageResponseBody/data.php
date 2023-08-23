<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\allowedProjectList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The projects in which the package is installed.
     *
     * @var allowedProjectList[]
     */
    public $allowedProjectList;

    /**
     * @description The details of the resources that are included in the package.
     *
     * @var resourceList
     */
    public $resourceList;
    protected $_name = [
        'allowedProjectList' => 'allowedProjectList',
        'resourceList'       => 'resourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedProjectList) {
            $res['allowedProjectList'] = [];
            if (null !== $this->allowedProjectList && \is_array($this->allowedProjectList)) {
                $n = 0;
                foreach ($this->allowedProjectList as $item) {
                    $res['allowedProjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceList) {
            $res['resourceList'] = null !== $this->resourceList ? $this->resourceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowedProjectList'])) {
            if (!empty($map['allowedProjectList'])) {
                $model->allowedProjectList = [];
                $n                         = 0;
                foreach ($map['allowedProjectList'] as $item) {
                    $model->allowedProjectList[$n++] = null !== $item ? allowedProjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resourceList'])) {
            $model->resourceList = resourceList::fromMap($map['resourceList']);
        }

        return $model;
    }
}
