<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutContactGroupRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var string[]
     */
    public $contactNames;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var bool
     */
    public $enableSubscribed;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'contactNames'     => 'ContactNames',
        'describe'         => 'Describe',
        'enableSubscribed' => 'EnableSubscribed',
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
        if (null !== $this->contactNames) {
            $res['ContactNames'] = $this->contactNames;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['ContactNames'])) {
            if (!empty($map['ContactNames'])) {
                $model->contactNames = $map['ContactNames'];
            }
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }

        return $model;
    }
}
