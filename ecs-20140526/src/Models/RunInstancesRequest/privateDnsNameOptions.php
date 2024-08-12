<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class privateDnsNameOptions extends Model
{
    /**
     * @var bool
     */
    public $enableInstanceIdDnsAAAARecord;

    /**
     * @var bool
     */
    public $enableInstanceIdDnsARecord;

    /**
     * @var bool
     */
    public $enableIpDnsARecord;

    /**
     * @var bool
     */
    public $enableIpDnsPtrRecord;

    /**
     * @var string
     */
    public $hostnameType;
    protected $_name = [
        'enableInstanceIdDnsAAAARecord' => 'EnableInstanceIdDnsAAAARecord',
        'enableInstanceIdDnsARecord'    => 'EnableInstanceIdDnsARecord',
        'enableIpDnsARecord'            => 'EnableIpDnsARecord',
        'enableIpDnsPtrRecord'          => 'EnableIpDnsPtrRecord',
        'hostnameType'                  => 'HostnameType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInstanceIdDnsAAAARecord) {
            $res['EnableInstanceIdDnsAAAARecord'] = $this->enableInstanceIdDnsAAAARecord;
        }
        if (null !== $this->enableInstanceIdDnsARecord) {
            $res['EnableInstanceIdDnsARecord'] = $this->enableInstanceIdDnsARecord;
        }
        if (null !== $this->enableIpDnsARecord) {
            $res['EnableIpDnsARecord'] = $this->enableIpDnsARecord;
        }
        if (null !== $this->enableIpDnsPtrRecord) {
            $res['EnableIpDnsPtrRecord'] = $this->enableIpDnsPtrRecord;
        }
        if (null !== $this->hostnameType) {
            $res['HostnameType'] = $this->hostnameType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateDnsNameOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInstanceIdDnsAAAARecord'])) {
            $model->enableInstanceIdDnsAAAARecord = $map['EnableInstanceIdDnsAAAARecord'];
        }
        if (isset($map['EnableInstanceIdDnsARecord'])) {
            $model->enableInstanceIdDnsARecord = $map['EnableInstanceIdDnsARecord'];
        }
        if (isset($map['EnableIpDnsARecord'])) {
            $model->enableIpDnsARecord = $map['EnableIpDnsARecord'];
        }
        if (isset($map['EnableIpDnsPtrRecord'])) {
            $model->enableIpDnsPtrRecord = $map['EnableIpDnsPtrRecord'];
        }
        if (isset($map['HostnameType'])) {
            $model->hostnameType = $map['HostnameType'];
        }

        return $model;
    }
}
