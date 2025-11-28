<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAuthorizedBizChainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberAuthorizedBizChainResponseBody\data\peerList;

class data extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $bizChainName;

    /**
     * @var string
     */
    public $bizChainType;

    /**
     * @var peerList[]
     */
    public $peerList;
    protected $_name = [
        'authorized' => 'Authorized',
        'bizChainId' => 'BizChainId',
        'bizChainName' => 'BizChainName',
        'bizChainType' => 'BizChainType',
        'peerList' => 'PeerList',
    ];

    public function validate()
    {
        if (\is_array($this->peerList)) {
            Model::validateArray($this->peerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }

        if (null !== $this->bizChainName) {
            $res['BizChainName'] = $this->bizChainName;
        }

        if (null !== $this->bizChainType) {
            $res['BizChainType'] = $this->bizChainType;
        }

        if (null !== $this->peerList) {
            if (\is_array($this->peerList)) {
                $res['PeerList'] = [];
                $n1 = 0;
                foreach ($this->peerList as $item1) {
                    $res['PeerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }

        if (isset($map['BizChainName'])) {
            $model->bizChainName = $map['BizChainName'];
        }

        if (isset($map['BizChainType'])) {
            $model->bizChainType = $map['BizChainType'];
        }

        if (isset($map['PeerList'])) {
            if (!empty($map['PeerList'])) {
                $model->peerList = [];
                $n1 = 0;
                foreach ($map['PeerList'] as $item1) {
                    $model->peerList[$n1] = peerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
