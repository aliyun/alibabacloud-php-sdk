<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAuthorizedBizChainResponseBody\data;

use AlibabaCloud\Dara\Model;

class peerList extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $peerName;
    protected $_name = [
        'authorized' => 'Authorized',
        'peerName' => 'PeerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->peerName) {
            $res['PeerName'] = $this->peerName;
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
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['PeerName'])) {
            $model->peerName = $map['PeerName'];
        }

        return $model;
    }
}
