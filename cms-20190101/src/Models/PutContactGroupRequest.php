<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

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
        'contactNames' => 'ContactNames',
        'describe' => 'Describe',
        'enableSubscribed' => 'EnableSubscribed',
    ];

    public function validate()
    {
        if (\is_array($this->contactNames)) {
            Model::validateArray($this->contactNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        if (null !== $this->contactNames) {
            if (\is_array($this->contactNames)) {
                $res['ContactNames'] = [];
                $n1 = 0;
                foreach ($this->contactNames as $item1) {
                    $res['ContactNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }

        if (null !== $this->enableSubscribed) {
            $res['EnableSubscribed'] = $this->enableSubscribed;
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
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        if (isset($map['ContactNames'])) {
            if (!empty($map['ContactNames'])) {
                $model->contactNames = [];
                $n1 = 0;
                foreach ($map['ContactNames'] as $item1) {
                    $model->contactNames[$n1] = $item1;
                    ++$n1;
                }
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
