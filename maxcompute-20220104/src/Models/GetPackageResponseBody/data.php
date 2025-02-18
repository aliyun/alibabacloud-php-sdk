<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\allowedProjectList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data\resourceList;

class data extends Model
{
    /**
     * @var allowedProjectList[]
     */
    public $allowedProjectList;
    /**
     * @var resourceList
     */
    public $resourceList;
    protected $_name = [
        'allowedProjectList' => 'allowedProjectList',
        'resourceList'       => 'resourceList',
    ];

    public function validate()
    {
        if (\is_array($this->allowedProjectList)) {
            Model::validateArray($this->allowedProjectList);
        }
        if (null !== $this->resourceList) {
            $this->resourceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedProjectList) {
            if (\is_array($this->allowedProjectList)) {
                $res['allowedProjectList'] = [];
                $n1                        = 0;
                foreach ($this->allowedProjectList as $item1) {
                    $res['allowedProjectList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceList) {
            $res['resourceList'] = null !== $this->resourceList ? $this->resourceList->toArray($noStream) : $this->resourceList;
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
        if (isset($map['allowedProjectList'])) {
            if (!empty($map['allowedProjectList'])) {
                $model->allowedProjectList = [];
                $n1                        = 0;
                foreach ($map['allowedProjectList'] as $item1) {
                    $model->allowedProjectList[$n1++] = allowedProjectList::fromMap($item1);
                }
            }
        }

        if (isset($map['resourceList'])) {
            $model->resourceList = resourceList::fromMap($map['resourceList']);
        }

        return $model;
    }
}
