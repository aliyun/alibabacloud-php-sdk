<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody;

use AlibabaCloud\Dara\Model;

class crossAccountAuthorizations extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bindInstance;

    /**
     * @var string
     */
    public $bindProduct;

    /**
     * @var int
     */
    public $bindUid;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpnConnectionId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bindInstance' => 'BindInstance',
        'bindProduct' => 'BindProduct',
        'bindUid' => 'BindUid',
        'creationTime' => 'CreationTime',
        'vpnConnectionId' => 'VpnConnectionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bindInstance) {
            $res['BindInstance'] = $this->bindInstance;
        }

        if (null !== $this->bindProduct) {
            $res['BindProduct'] = $this->bindProduct;
        }

        if (null !== $this->bindUid) {
            $res['BindUid'] = $this->bindUid;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BindInstance'])) {
            $model->bindInstance = $map['BindInstance'];
        }

        if (isset($map['BindProduct'])) {
            $model->bindProduct = $map['BindProduct'];
        }

        if (isset($map['BindUid'])) {
            $model->bindUid = $map['BindUid'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }

        return $model;
    }
}
