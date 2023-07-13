<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\contactParameters;

use AlibabaCloud\Tea\Model;

class contactParameter extends Model
{
    /**
     * @description Queries the details of an event-triggered alert rule.
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example 3
     *
     * @var string
     */
    public $level;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'id'               => 'Id',
        'level'            => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
