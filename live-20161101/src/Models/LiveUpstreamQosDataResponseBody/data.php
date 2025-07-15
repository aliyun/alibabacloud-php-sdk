<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\LiveUpstreamQosDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\LiveUpstreamQosDataResponseBody\data\detailData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cdnDomain;

    /**
     * @var string
     */
    public $cdnIsp;

    /**
     * @var string
     */
    public $cdnOcid;

    /**
     * @var string
     */
    public $cdnProvince;

    /**
     * @var detailData[]
     */
    public $detailData;

    /**
     * @var string
     */
    public $kwaiSidc;

    /**
     * @var int
     */
    public $kwaiTsc;

    /**
     * @var string
     */
    public $upstreamDomain;
    protected $_name = [
        'cdnDomain' => 'CdnDomain',
        'cdnIsp' => 'CdnIsp',
        'cdnOcid' => 'CdnOcid',
        'cdnProvince' => 'CdnProvince',
        'detailData' => 'DetailData',
        'kwaiSidc' => 'KwaiSidc',
        'kwaiTsc' => 'KwaiTsc',
        'upstreamDomain' => 'UpstreamDomain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnDomain) {
            $res['CdnDomain'] = $this->cdnDomain;
        }
        if (null !== $this->cdnIsp) {
            $res['CdnIsp'] = $this->cdnIsp;
        }
        if (null !== $this->cdnOcid) {
            $res['CdnOcid'] = $this->cdnOcid;
        }
        if (null !== $this->cdnProvince) {
            $res['CdnProvince'] = $this->cdnProvince;
        }
        if (null !== $this->detailData) {
            $res['DetailData'] = [];
            if (null !== $this->detailData && \is_array($this->detailData)) {
                $n = 0;
                foreach ($this->detailData as $item) {
                    $res['DetailData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->kwaiSidc) {
            $res['KwaiSidc'] = $this->kwaiSidc;
        }
        if (null !== $this->kwaiTsc) {
            $res['KwaiTsc'] = $this->kwaiTsc;
        }
        if (null !== $this->upstreamDomain) {
            $res['UpstreamDomain'] = $this->upstreamDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnDomain'])) {
            $model->cdnDomain = $map['CdnDomain'];
        }
        if (isset($map['CdnIsp'])) {
            $model->cdnIsp = $map['CdnIsp'];
        }
        if (isset($map['CdnOcid'])) {
            $model->cdnOcid = $map['CdnOcid'];
        }
        if (isset($map['CdnProvince'])) {
            $model->cdnProvince = $map['CdnProvince'];
        }
        if (isset($map['DetailData'])) {
            if (!empty($map['DetailData'])) {
                $model->detailData = [];
                $n = 0;
                foreach ($map['DetailData'] as $item) {
                    $model->detailData[$n++] = null !== $item ? detailData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KwaiSidc'])) {
            $model->kwaiSidc = $map['KwaiSidc'];
        }
        if (isset($map['KwaiTsc'])) {
            $model->kwaiTsc = $map['KwaiTsc'];
        }
        if (isset($map['UpstreamDomain'])) {
            $model->upstreamDomain = $map['UpstreamDomain'];
        }

        return $model;
    }
}
