<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos\DBNodeNetInfo\netInfos;

class DBNodeNetInfo extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBNodeRole;

    /**
     * @var netInfos
     */
    public $netInfos;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DBNodeRole' => 'DBNodeRole',
        'netInfos' => 'NetInfos',
    ];

    public function validate()
    {
        if (null !== $this->netInfos) {
            $this->netInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBNodeRole) {
            $res['DBNodeRole'] = $this->DBNodeRole;
        }

        if (null !== $this->netInfos) {
            $res['NetInfos'] = null !== $this->netInfos ? $this->netInfos->toArray($noStream) : $this->netInfos;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBNodeRole'])) {
            $model->DBNodeRole = $map['DBNodeRole'];
        }

        if (isset($map['NetInfos'])) {
            $model->netInfos = netInfos::fromMap($map['NetInfos']);
        }

        return $model;
    }
}
