<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsRequest;

use AlibabaCloud\Tea\Model;

class contactParameters extends Model
{
    /**
     * @description The name of the alert contact group. Valid values of N: 1 to 5.
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description The ID of the recipient that receives alert notifications. Valid values of N: 1 to 5.
     *
     * @example 2
     *
     * @var string
     */
    public $id;

    /**
     * @description The alert level and the corresponding notification methods. Valid values of N: 1 to 5. Valid values:
     *
     * 4: Alert notifications are sent by using DingTalk chatbots and emails.
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
