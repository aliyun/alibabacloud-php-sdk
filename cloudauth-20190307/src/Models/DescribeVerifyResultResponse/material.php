<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse\material\idCardInfo;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $faceGlobalUrl;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var bool
     */
    public $faceMask;

    /**
     * @var string
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var idCardInfo
     */
    public $idCardInfo;

    /**
     * @var string[]
     */
    public $videoUrls;
    protected $_name = [
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceImageUrl'  => 'FaceImageUrl',
        'faceMask'      => 'FaceMask',
        'faceQuality'   => 'FaceQuality',
        'idCardName'    => 'IdCardName',
        'idCardNumber'  => 'IdCardNumber',
        'idCardInfo'    => 'IdCardInfo',
        'videoUrls'     => 'VideoUrls',
    ];

    public function validate()
    {
        Model::validateRequired('faceGlobalUrl', $this->faceGlobalUrl, true);
        Model::validateRequired('faceImageUrl', $this->faceImageUrl, true);
        Model::validateRequired('faceMask', $this->faceMask, true);
        Model::validateRequired('faceQuality', $this->faceQuality, true);
        Model::validateRequired('idCardName', $this->idCardName, true);
        Model::validateRequired('idCardNumber', $this->idCardNumber, true);
        Model::validateRequired('idCardInfo', $this->idCardInfo, true);
        Model::validateRequired('videoUrls', $this->videoUrls, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceGlobalUrl) {
            $res['FaceGlobalUrl'] = $this->faceGlobalUrl;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->faceMask) {
            $res['FaceMask'] = $this->faceMask;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toMap() : null;
        }
        if (null !== $this->videoUrls) {
            $res['VideoUrls'] = $this->videoUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return material
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceGlobalUrl'])) {
            $model->faceGlobalUrl = $map['FaceGlobalUrl'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['FaceMask'])) {
            $model->faceMask = $map['FaceMask'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }
        if (isset($map['VideoUrls'])) {
            if (!empty($map['VideoUrls'])) {
                $model->videoUrls = $map['VideoUrls'];
            }
        }

        return $model;
    }
}
