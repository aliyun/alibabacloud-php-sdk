<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;

use AlibabaCloud\Tea\Model;

class resourceDirectory extends Model
{
    /**
     * @var string
     */
    public $accountGroupType;

    /**
     * @var string[]
     */
    public $members;
    protected $_name = [
        'accountGroupType' => 'accountGroupType',
        'members'          => 'members',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountGroupType) {
            $res['accountGroupType'] = $this->accountGroupType;
        }
        if (null !== $this->members) {
            $res['members'] = $this->members;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDirectory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountGroupType'])) {
            $model->accountGroupType = $map['accountGroupType'];
        }
        if (isset($map['members'])) {
            if (!empty($map['members'])) {
                $model->members = $map['members'];
            }
        }

        return $model;
    }
}
