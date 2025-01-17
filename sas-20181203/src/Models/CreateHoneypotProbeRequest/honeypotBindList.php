<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest\honeypotBindList\bindPortList;

class honeypotBindList extends Model
{
    /**
     * @var bindPortList[]
     */
    public $bindPortList;
    /**
     * @var string
     */
    public $honeypotId;
    protected $_name = [
        'bindPortList' => 'BindPortList',
        'honeypotId'   => 'HoneypotId',
    ];

    public function validate()
    {
        if (\is_array($this->bindPortList)) {
            Model::validateArray($this->bindPortList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindPortList) {
            if (\is_array($this->bindPortList)) {
                $res['BindPortList'] = [];
                $n1                  = 0;
                foreach ($this->bindPortList as $item1) {
                    $res['BindPortList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
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
        if (isset($map['BindPortList'])) {
            if (!empty($map['BindPortList'])) {
                $model->bindPortList = [];
                $n1                  = 0;
                foreach ($map['BindPortList'] as $item1) {
                    $model->bindPortList[$n1++] = bindPortList::fromMap($item1);
                }
            }
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        return $model;
    }
}
