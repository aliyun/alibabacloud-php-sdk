<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponseBody\material\idCardInfo;

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
     * @var string
     */
    public $faceMask;
    /**
     * @var string
     */
    public $faceQuality;
    /**
     * @var idCardInfo
     */
    public $idCardInfo;
    /**
     * @var string
     */
    public $idCardName;
    /**
     * @var string
     */
    public $idCardNumber;
    protected $_name = [
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceImageUrl'  => 'FaceImageUrl',
        'faceMask'      => 'FaceMask',
        'faceQuality'   => 'FaceQuality',
        'idCardInfo'    => 'IdCardInfo',
        'idCardName'    => 'IdCardName',
        'idCardNumber'  => 'IdCardNumber',
    ];

    public function validate()
    {
        if (null !== $this->idCardInfo) {
            $this->idCardInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toArray($noStream) : $this->idCardInfo;
        }

        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }

        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
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

        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }

        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }

        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }

        return $model;
    }
}
