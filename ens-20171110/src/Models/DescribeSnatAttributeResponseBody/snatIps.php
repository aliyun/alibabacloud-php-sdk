<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class snatIps extends Model
{
    /**
     * @example 2020-04-26T15:38:27Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example 203.132.38.139
     *
     * @var string
     */
    public $ip;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'ip'           => 'Ip',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
