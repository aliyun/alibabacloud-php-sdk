<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamRequest;

use AlibabaCloud\Dara\Model;

class instanceId extends Model
{
    /**
     * @var string[]
     */
    public $fieldInstanceIdList;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'fieldInstanceIdList' => 'FieldInstanceIdList',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->fieldInstanceIdList)) {
            Model::validateArray($this->fieldInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldInstanceIdList) {
            if (\is_array($this->fieldInstanceIdList)) {
                $res['FieldInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->fieldInstanceIdList as $item1) {
                    $res['FieldInstanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['FieldInstanceIdList'])) {
            if (!empty($map['FieldInstanceIdList'])) {
                $model->fieldInstanceIdList = [];
                $n1 = 0;
                foreach ($map['FieldInstanceIdList'] as $item1) {
                    $model->fieldInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
