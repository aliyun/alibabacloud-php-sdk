<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardSetRequest\createCommand;

use AlibabaCloud\Dara\Model;

class visibilityConfig extends Model
{
    /**
     * @var string[]
     */
    public $specifiedUserList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'specifiedUserList' => 'SpecifiedUserList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->specifiedUserList)) {
            Model::validateArray($this->specifiedUserList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specifiedUserList) {
            if (\is_array($this->specifiedUserList)) {
                $res['SpecifiedUserList'] = [];
                $n1 = 0;
                foreach ($this->specifiedUserList as $item1) {
                    $res['SpecifiedUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['SpecifiedUserList'])) {
            if (!empty($map['SpecifiedUserList'])) {
                $model->specifiedUserList = [];
                $n1 = 0;
                foreach ($map['SpecifiedUserList'] as $item1) {
                    $model->specifiedUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
