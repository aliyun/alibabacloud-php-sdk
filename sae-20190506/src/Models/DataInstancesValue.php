<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DataInstancesValue extends Model
{
    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var DataInstancesValueListenersValue[]
     */
    public $listeners;

    /**
     * @var bool
     */
    public $createdBySae;
    protected $_name = [
        'dnsName' => 'DnsName',
        'listeners' => 'Listeners',
        'createdBySae' => 'CreatedBySae',
    ];

    public function validate()
    {
        if (\is_array($this->listeners)) {
            Model::validateArray($this->listeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }

        if (null !== $this->listeners) {
            if (\is_array($this->listeners)) {
                $res['Listeners'] = [];
                foreach ($this->listeners as $key1 => $value1) {
                    $res['Listeners'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->createdBySae) {
            $res['CreatedBySae'] = $this->createdBySae;
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
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }

        if (isset($map['Listeners'])) {
            if (!empty($map['Listeners'])) {
                $model->listeners = [];
                foreach ($map['Listeners'] as $key1 => $value1) {
                    $model->listeners[$key1] = DataInstancesValueListenersValue::fromMap($value1);
                }
            }
        }

        if (isset($map['CreatedBySae'])) {
            $model->createdBySae = $map['CreatedBySae'];
        }

        return $model;
    }
}
