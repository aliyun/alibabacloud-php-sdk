<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelDistributionStatDataRequest extends Model
{
    /**
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 123333
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1615893133
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1615893757
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example OS
     *
     * @var string
     */
    public $statDim;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'statDim'     => 'StatDim',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }
        if (null !== $this->statDim) {
            $res['StatDim'] = $this->statDim;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelDistributionStatDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }
        if (isset($map['StatDim'])) {
            $model->statDim = $map['StatDim'];
        }

        return $model;
    }
}
