<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class successLoginNames extends Model
{
    /**
     * @var string[]
     */
    public $successLoginName;
    protected $_name = [
        'successLoginName' => 'SuccessLoginName',
    ];

    public function validate()
    {
        if (\is_array($this->successLoginName)) {
            Model::validateArray($this->successLoginName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successLoginName) {
            if (\is_array($this->successLoginName)) {
                $res['SuccessLoginName'] = [];
                $n1 = 0;
                foreach ($this->successLoginName as $item1) {
                    $res['SuccessLoginName'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SuccessLoginName'])) {
            if (!empty($map['SuccessLoginName'])) {
                $model->successLoginName = [];
                $n1 = 0;
                foreach ($map['SuccessLoginName'] as $item1) {
                    $model->successLoginName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
