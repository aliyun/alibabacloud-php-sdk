<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetListResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetListResponseBody\result\blockchainSubnetList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $blockchainName;

    /**
     * @var blockchainSubnetList[]
     */
    public $blockchainSubnetList;

    /**
     * @var bool
     */
    public $consortiumAdmin;
    protected $_name = [
        'antChainId'           => 'AntChainId',
        'blockchainName'       => 'BlockchainName',
        'blockchainSubnetList' => 'BlockchainSubnetList',
        'consortiumAdmin'      => 'ConsortiumAdmin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->blockchainName) {
            $res['BlockchainName'] = $this->blockchainName;
        }
        if (null !== $this->blockchainSubnetList) {
            $res['BlockchainSubnetList'] = [];
            if (null !== $this->blockchainSubnetList && \is_array($this->blockchainSubnetList)) {
                $n = 0;
                foreach ($this->blockchainSubnetList as $item) {
                    $res['BlockchainSubnetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->consortiumAdmin) {
            $res['ConsortiumAdmin'] = $this->consortiumAdmin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['BlockchainName'])) {
            $model->blockchainName = $map['BlockchainName'];
        }
        if (isset($map['BlockchainSubnetList'])) {
            if (!empty($map['BlockchainSubnetList'])) {
                $model->blockchainSubnetList = [];
                $n                           = 0;
                foreach ($map['BlockchainSubnetList'] as $item) {
                    $model->blockchainSubnetList[$n++] = null !== $item ? blockchainSubnetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConsortiumAdmin'])) {
            $model->consortiumAdmin = $map['ConsortiumAdmin'];
        }

        return $model;
    }
}
