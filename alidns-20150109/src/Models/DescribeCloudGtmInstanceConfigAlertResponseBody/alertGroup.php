<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody;

use AlibabaCloud\Dara\Model;

class alertGroup extends Model
{
    /**
     * @var string[]
     */
    public $alertGroup;
    protected $_name = [
        'alertGroup' => 'AlertGroup',
    ];

    public function validate()
    {
        if (\is_array($this->alertGroup)) {
            Model::validateArray($this->alertGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertGroup) {
            if (\is_array($this->alertGroup)) {
                $res['AlertGroup'] = [];
                $n1 = 0;
                foreach ($this->alertGroup as $item1) {
                    $res['AlertGroup'][$n1] = $item1;
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
        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = [];
                $n1 = 0;
                foreach ($map['AlertGroup'] as $item1) {
                    $model->alertGroup[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
