<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponseBody;

use AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponseBody\resultModule\bandOfferList;
use AlibabaCloud\Tea\Model;

class resultModule extends Model
{
    /**
     * @var int
     */
    public $uploadBandwidth;

    /**
     * @var int
     */
    public $bandId;

    /**
     * @var bandOfferList
     */
    public $bandOfferList;

    /**
     * @var int
     */
    public $downloadBandwidth;
    protected $_name = [
        'uploadBandwidth'   => 'UploadBandwidth',
        'bandId'            => 'BandId',
        'bandOfferList'     => 'BandOfferList',
        'downloadBandwidth' => 'DownloadBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadBandwidth) {
            $res['UploadBandwidth'] = $this->uploadBandwidth;
        }
        if (null !== $this->bandId) {
            $res['BandId'] = $this->bandId;
        }
        if (null !== $this->bandOfferList) {
            $res['BandOfferList'] = null !== $this->bandOfferList ? $this->bandOfferList->toMap() : null;
        }
        if (null !== $this->downloadBandwidth) {
            $res['DownloadBandwidth'] = $this->downloadBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UploadBandwidth'])) {
            $model->uploadBandwidth = $map['UploadBandwidth'];
        }
        if (isset($map['BandId'])) {
            $model->bandId = $map['BandId'];
        }
        if (isset($map['BandOfferList'])) {
            $model->bandOfferList = bandOfferList::fromMap($map['BandOfferList']);
        }
        if (isset($map['DownloadBandwidth'])) {
            $model->downloadBandwidth = $map['DownloadBandwidth'];
        }

        return $model;
    }
}
