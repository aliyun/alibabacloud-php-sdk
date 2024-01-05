<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest;

use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\commonFileSystemDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\ossDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\udmDetail;
use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @var commonFileSystemDetail
     */
    public $commonFileSystemDetail;

    /**
     * @description The details of the Object Storage Service (OSS) backup.
     *
     * @var ossDetail
     */
    public $ossDetail;

    /**
     * @description The backup details of the Elastic Compute Service (ECS) instance.
     *
     * @var udmDetail
     */
    public $udmDetail;
    protected $_name = [
        'commonFileSystemDetail' => 'CommonFileSystemDetail',
        'ossDetail'              => 'OssDetail',
        'udmDetail'              => 'UdmDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonFileSystemDetail) {
            $res['CommonFileSystemDetail'] = null !== $this->commonFileSystemDetail ? $this->commonFileSystemDetail->toMap() : null;
        }
        if (null !== $this->ossDetail) {
            $res['OssDetail'] = null !== $this->ossDetail ? $this->ossDetail->toMap() : null;
        }
        if (null !== $this->udmDetail) {
            $res['UdmDetail'] = null !== $this->udmDetail ? $this->udmDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonFileSystemDetail'])) {
            $model->commonFileSystemDetail = commonFileSystemDetail::fromMap($map['CommonFileSystemDetail']);
        }
        if (isset($map['OssDetail'])) {
            $model->ossDetail = ossDetail::fromMap($map['OssDetail']);
        }
        if (isset($map['UdmDetail'])) {
            $model->udmDetail = udmDetail::fromMap($map['UdmDetail']);
        }

        return $model;
    }
}
