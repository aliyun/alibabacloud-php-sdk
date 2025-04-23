<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo;

use AlibabaCloud\Dara\Model;

class onPremiseInfo extends Model
{
    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'hostName' => 'HostName',
        'IP' => 'IP',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
