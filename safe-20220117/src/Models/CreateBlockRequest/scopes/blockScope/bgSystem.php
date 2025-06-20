<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateBlockRequest\scopes\blockScope;

use AlibabaCloud\Dara\Model;

class bgSystem extends Model
{
    /**
     * @var string[]
     */
    public $relateCodes;

    /**
     * @var string
     */
    public $selfCodeName;
    protected $_name = [
        'relateCodes' => 'RelateCodes',
        'selfCodeName' => 'SelfCodeName',
    ];

    public function validate()
    {
        if (\is_array($this->relateCodes)) {
            Model::validateArray($this->relateCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relateCodes) {
            if (\is_array($this->relateCodes)) {
                $res['RelateCodes'] = [];
                $n1 = 0;
                foreach ($this->relateCodes as $item1) {
                    $res['RelateCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selfCodeName) {
            $res['SelfCodeName'] = $this->selfCodeName;
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
        if (isset($map['RelateCodes'])) {
            if (!empty($map['RelateCodes'])) {
                $model->relateCodes = [];
                $n1 = 0;
                foreach ($map['RelateCodes'] as $item1) {
                    $model->relateCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SelfCodeName'])) {
            $model->selfCodeName = $map['SelfCodeName'];
        }

        return $model;
    }
}
