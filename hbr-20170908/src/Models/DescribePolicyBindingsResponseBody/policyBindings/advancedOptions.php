<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\commonFileSystemDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\commonNasDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\fileDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\ossDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\udmDetail;
use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
    /**
     * @description Advanced options for large-scale file system backup.
     *
     * @var commonFileSystemDetail
     */
    public $commonFileSystemDetail;

    /**
     * @description Advanced options for local NAS.
     *
     * @var commonNasDetail
     */
    public $commonNasDetail;

    /**
     * @description Advanced options for file backup.
     *
     * @var fileDetail
     */
    public $fileDetail;

    /**
     * @description Advanced options for OSS backup.
     *
     * @var ossDetail
     */
    public $ossDetail;

    /**
     * @description Advanced options for full machine backup.
     *
     * @var udmDetail
     */
    public $udmDetail;
    protected $_name = [
        'commonFileSystemDetail' => 'CommonFileSystemDetail',
        'commonNasDetail'        => 'CommonNasDetail',
        'fileDetail'             => 'FileDetail',
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
        if (null !== $this->commonNasDetail) {
            $res['CommonNasDetail'] = null !== $this->commonNasDetail ? $this->commonNasDetail->toMap() : null;
        }
        if (null !== $this->fileDetail) {
            $res['FileDetail'] = null !== $this->fileDetail ? $this->fileDetail->toMap() : null;
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
