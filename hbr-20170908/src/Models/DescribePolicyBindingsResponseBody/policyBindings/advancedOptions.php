<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\commonNasDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\fileDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\ossDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions\udmDetail;
use AlibabaCloud\Tea\Model;

class advancedOptions extends Model
{
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
        'commonNasDetail' => 'CommonNasDetail',
        'fileDetail'      => 'FileDetail',
        'ossDetail'       => 'OssDetail',
        'udmDetail'       => 'UdmDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
