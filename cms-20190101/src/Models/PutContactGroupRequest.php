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
     * @var string
     */
    public $describe;

    /**
     * @var bool
     */
    public $enableSubscribed;

    /**
     * @var string[]
     */
    public $contactNames;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'describe'         => 'Describe',
        'enableSubscribed' => 'EnableSubscribed',
        'contactNames'     => 'ContactNames',
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
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
        }
        if (null !== $this->contactNames) {
            $res['ContactNames'] = $this->contactNames;
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
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['EnableSubscribed'])) {
            $model->enableSubscribed = $map['EnableSubscribed'];
        }
        if (isset($map['ContactNames'])) {
            if (!empty($map['ContactNames'])) {
                $model->contactNames = $map['ContactNames'];
            }
        }

        return $model;
    }
}
