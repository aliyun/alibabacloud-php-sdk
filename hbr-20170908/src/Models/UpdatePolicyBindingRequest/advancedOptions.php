<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\commonFileSystemDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\ossDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyBindingRequest\advancedOptions\udmDetail;

class advancedOptions extends Model
{
    /**
     * @var commonFileSystemDetail
     */
    public $commonFileSystemDetail;
    /**
     * @var ossDetail
     */
    public $ossDetail;
    /**
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
        if (null !== $this->commonFileSystemDetail) {
            $this->commonFileSystemDetail->validate();
        }
        if (null !== $this->ossDetail) {
            $this->ossDetail->validate();
        }
        if (null !== $this->udmDetail) {
            $this->udmDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonFileSystemDetail) {
            $res['CommonFileSystemDetail'] = null !== $this->commonFileSystemDetail ? $this->commonFileSystemDetail->toArray($noStream) : $this->commonFileSystemDetail;
        }

        if (null !== $this->ossDetail) {
            $res['OssDetail'] = null !== $this->ossDetail ? $this->ossDetail->toArray($noStream) : $this->ossDetail;
        }

        if (null !== $this->udmDetail) {
            $res['UdmDetail'] = null !== $this->udmDetail ? $this->udmDetail->toArray($noStream) : $this->udmDetail;
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
