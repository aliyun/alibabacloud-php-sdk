<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DataInstancesValue extends Model
{
    /**
     * @description The domain name.
     *
     * @example nlb-wb7r6dlwetvt5j****.cn-hangzhou.nlb.aliyuncs.com
     *
     * @var string
     */
    public $dnsName;

    /**
     * @description The listeners.
     *
     * @var DataInstancesValueListenersValue[]
     */
    public $listeners;

    /**
     * @description Indicates whether the instance is created by SAE.
     *
     *   **true**: The instance is created by SAE.
     *   **false**: The existing instance is reused.
     *
     * @example true
     *
     * @var bool
     */
    public $createdBySae;
    protected $_name = [
        'dnsName' => 'DnsName',
        'listeners' => 'Listeners',
        'createdBySae' => 'CreatedBySae',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }
        if (null !== $this->listeners) {
            $res['Listeners'] = [];
            if (null !== $this->listeners && \is_array($this->listeners)) {
                foreach ($this->listeners as $key => $val) {
                    $res['Listeners'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->createdBySae) {
            $res['CreatedBySae'] = $this->createdBySae;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataInstancesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }
        if (isset($map['CreatedBySae'])) {
            $model->createdBySae = $map['CreatedBySae'];
        }

        return $model;
    }
}
