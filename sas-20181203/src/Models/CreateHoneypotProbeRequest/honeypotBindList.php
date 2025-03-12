<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest\honeypotBindList\bindPortList;
use AlibabaCloud\Tea\Model;

class honeypotBindList extends Model
{
    /**
     * @description The listener ports.
     *
     * @var bindPortList[]
     */
    public $bindPortList;

    /**
     * @description The ID of the honeypot.
     *
     * > You can call the [ListHoneypot](~~ListHoneypot~~) operation to query the IDs of honeypots.
     * @example 1a5eda2d40f92ac87d6b63e1a5ad4b76fe0d4110c4a3e2fa85438a29ae55****
     *
     * @var string
     */
    public $honeypotId;
    protected $_name = [
        'bindPortList' => 'BindPortList',
        'honeypotId'   => 'HoneypotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindPortList) {
            $res['BindPortList'] = [];
            if (null !== $this->bindPortList && \is_array($this->bindPortList)) {
                $n = 0;
                foreach ($this->bindPortList as $item) {
                    $res['BindPortList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotBindList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindPortList'])) {
            if (!empty($map['BindPortList'])) {
                $model->bindPortList = [];
                $n                   = 0;
                foreach ($map['BindPortList'] as $item) {
                    $model->bindPortList[$n++] = null !== $item ? bindPortList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        return $model;
    }
}
