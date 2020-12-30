<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody\material\idCardInfo;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $faceGlobalUrl;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $faceMask;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var idCardInfo
     */
    public $idCardInfo;

    /**
     * @var string
     */
    public $faceQuality;
    protected $_name = [
        'idCardNumber'  => 'IdCardNumber',
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceImageUrl'  => 'FaceImageUrl',
        'faceMask'      => 'FaceMask',
        'idCardName'    => 'IdCardName',
        'idCardInfo'    => 'IdCardInfo',
        'faceQuality'   => 'FaceQuality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->faceGlobalUrl) {
            $res['FaceGlobalUrl'] = $this->faceGlobalUrl;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->faceMask) {
            $res['FaceMask'] = $this->faceMask;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toMap() : null;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
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
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['FaceGlobalUrl'])) {
            $model->faceGlobalUrl = $map['FaceGlobalUrl'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['FaceMask'])) {
            $model->faceMask = $map['FaceMask'];
        }
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }

        return $model;
    }
}
