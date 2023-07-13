<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class contactParameters extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **PutEventRuleTargets**.
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The HTTP request method. Valid values of N: 1 to 5.
     *
     * Valid values: GET and POST.
     * @example 2
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the event-triggered alert rule.
     *
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
     * @return contactParameters
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
