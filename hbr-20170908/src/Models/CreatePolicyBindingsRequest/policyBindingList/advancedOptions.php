<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions\commonFileSystemDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions\commonNasDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions\fileDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions\ossDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions\udmDetail;

class advancedOptions extends Model
{
    /**
     * @var commonFileSystemDetail
     */
    public $commonFileSystemDetail;

    /**
     * @var commonNasDetail
     */
    public $commonNasDetail;

    /**
     * @var fileDetail
     */
    public $fileDetail;

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
        'commonNasDetail' => 'CommonNasDetail',
        'fileDetail' => 'FileDetail',
        'ossDetail' => 'OssDetail',
        'udmDetail' => 'UdmDetail',
    ];

    public function validate()
    {
        if (null !== $this->commonFileSystemDetail) {
            $this->commonFileSystemDetail->validate();
        }
        if (null !== $this->commonNasDetail) {
            $this->commonNasDetail->validate();
        }
        if (null !== $this->fileDetail) {
            $this->fileDetail->validate();
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

        if (null !== $this->commonNasDetail) {
            $res['CommonNasDetail'] = null !== $this->commonNasDetail ? $this->commonNasDetail->toArray($noStream) : $this->commonNasDetail;
        }

        if (null !== $this->fileDetail) {
            $res['FileDetail'] = null !== $this->fileDetail ? $this->fileDetail->toArray($noStream) : $this->fileDetail;
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

        if (isset($map['CommonNasDetail'])) {
            $model->commonNasDetail = commonNasDetail::fromMap($map['CommonNasDetail']);
        }

        if (isset($map['FileDetail'])) {
            $model->fileDetail = fileDetail::fromMap($map['FileDetail']);
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
