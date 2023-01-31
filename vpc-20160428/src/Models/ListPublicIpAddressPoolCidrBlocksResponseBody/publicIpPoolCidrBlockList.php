<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolCidrBlocksResponseBody;

use AlibabaCloud\Tea\Model;

class publicIpPoolCidrBlockList extends Model
{
    /**
     * @example 47.0.XX.XX/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 2022-05-10T01:37:38Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example pippool-6wetvn6fumkgycssx****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalIpNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $usedIpNum;
    protected $_name = [
        'cidrBlock'             => 'CidrBlock',
        'creationTime'          => 'CreationTime',
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
        'status'                => 'Status',
        'totalIpNum'            => 'TotalIpNum',
        'usedIpNum'             => 'UsedIpNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalIpNum) {
            $res['TotalIpNum'] = $this->totalIpNum;
        }
        if (null !== $this->usedIpNum) {
            $res['UsedIpNum'] = $this->usedIpNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpPoolCidrBlockList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalIpNum'])) {
            $model->totalIpNum = $map['TotalIpNum'];
        }
        if (isset($map['UsedIpNum'])) {
            $model->usedIpNum = $map['UsedIpNum'];
        }

        return $model;
    }
}
