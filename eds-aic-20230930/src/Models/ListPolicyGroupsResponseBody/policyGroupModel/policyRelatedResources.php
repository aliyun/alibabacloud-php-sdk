<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ListPolicyGroupsResponseBody\policyGroupModel;

use AlibabaCloud\Tea\Model;

class policyRelatedResources extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceGroupIds;

    /**
     * @var string[]
     */
    public $cloudPhoneMatrixIds;
    protected $_name = [
        'androidInstanceGroupIds' => 'AndroidInstanceGroupIds',
        'cloudPhoneMatrixIds' => 'CloudPhoneMatrixIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceGroupIds) {
            $res['AndroidInstanceGroupIds'] = $this->androidInstanceGroupIds;
        }
        if (null !== $this->cloudPhoneMatrixIds) {
            $res['CloudPhoneMatrixIds'] = $this->cloudPhoneMatrixIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyRelatedResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceGroupIds'])) {
            if (!empty($map['AndroidInstanceGroupIds'])) {
                $model->androidInstanceGroupIds = $map['AndroidInstanceGroupIds'];
            }
        }
        if (isset($map['CloudPhoneMatrixIds'])) {
            if (!empty($map['CloudPhoneMatrixIds'])) {
                $model->cloudPhoneMatrixIds = $map['CloudPhoneMatrixIds'];
            }
        }

        return $model;
    }
}
