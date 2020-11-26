<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse\material\idCardInfo;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $faceGlobalUrl;

    /**
     * @var string
     */
    public $faceMask;

    /**
     * @var idCardInfo
     */
    public $idCardInfo;
    protected $_name = [
        'faceImageUrl'  => 'FaceImageUrl',
        'idCardName'    => 'IdCardName',
        'idCardNumber'  => 'IdCardNumber',
        'faceQuality'   => 'FaceQuality',
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceMask'      => 'FaceMask',
        'idCardInfo'    => 'IdCardInfo',
    ];

    public function validate()
    {
        Model::validateRequired('faceImageUrl', $this->faceImageUrl, true);
        Model::validateRequired('idCardName', $this->idCardName, true);
        Model::validateRequired('idCardNumber', $this->idCardNumber, true);
        Model::validateRequired('faceQuality', $this->faceQuality, true);
        Model::validateRequired('faceGlobalUrl', $this->faceGlobalUrl, true);
        Model::validateRequired('faceMask', $this->faceMask, true);
        Model::validateRequired('idCardInfo', $this->idCardInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->faceGlobalUrl) {
            $res['FaceGlobalUrl'] = $this->faceGlobalUrl;
        }
        if (null !== $this->faceMask) {
            $res['FaceMask'] = $this->faceMask;
        }
        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toMap() : null;
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
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['FaceGlobalUrl'])) {
            $model->faceGlobalUrl = $map['FaceGlobalUrl'];
        }
        if (isset($map['FaceMask'])) {
            $model->faceMask = $map['FaceMask'];
        }
        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }

        return $model;
    }
}
