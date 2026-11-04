<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class failLoginNames extends Model
{
    /**
     * @var string[]
     */
    public $failLoginName;
    protected $_name = [
        'failLoginName' => 'FailLoginName',
    ];

    public function validate()
    {
        if (\is_array($this->failLoginName)) {
            Model::validateArray($this->failLoginName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failLoginName) {
            if (\is_array($this->failLoginName)) {
                $res['FailLoginName'] = [];
                $n1 = 0;
                foreach ($this->failLoginName as $item1) {
                    $res['FailLoginName'][$n1] = $item1;
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
        if (isset($map['FailLoginName'])) {
            if (!empty($map['FailLoginName'])) {
                $model->failLoginName = [];
                $n1 = 0;
                foreach ($map['FailLoginName'] as $item1) {
                    $model->failLoginName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
