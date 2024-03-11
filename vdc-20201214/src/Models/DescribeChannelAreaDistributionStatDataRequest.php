<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelAreaDistributionStatDataRequest extends Model
{
    /**
     * @example pdtk****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1616125296
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1616125993
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @var string
     */
    public $parentArea;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'parentArea'  => 'ParentArea',
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
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelAreaDistributionStatDataRequest
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
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }

        return $model;
    }
}
