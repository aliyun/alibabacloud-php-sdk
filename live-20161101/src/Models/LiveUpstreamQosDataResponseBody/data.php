<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\LiveUpstreamQosDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\LiveUpstreamQosDataResponseBody\data\detailData;

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

    public function validate()
    {
        if (\is_array($this->detailData)) {
            Model::validateArray($this->detailData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->detailData)) {
                $res['DetailData'] = [];
                $n1 = 0;
                foreach ($this->detailData as $item1) {
                    $res['DetailData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DetailData'] as $item1) {
                    $model->detailData[$n1] = detailData::fromMap($item1);
                    ++$n1;
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
