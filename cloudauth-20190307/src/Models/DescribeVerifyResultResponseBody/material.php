<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponseBody\material\idCardInfo;

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

    /**
     * @var string[]
     */
    public $videoUrls;
    protected $_name = [
        'faceGlobalUrl' => 'FaceGlobalUrl',
        'faceImageUrl' => 'FaceImageUrl',
        'faceMask' => 'FaceMask',
        'faceQuality' => 'FaceQuality',
        'idCardInfo' => 'IdCardInfo',
        'idCardName' => 'IdCardName',
        'idCardNumber' => 'IdCardNumber',
        'videoUrls' => 'VideoUrls',
    ];

    public function validate()
    {
        if (null !== $this->idCardInfo) {
            $this->idCardInfo->validate();
        }
        if (\is_array($this->videoUrls)) {
            Model::validateArray($this->videoUrls);
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

        if (null !== $this->videoUrls) {
            if (\is_array($this->videoUrls)) {
                $res['VideoUrls'] = [];
                $n1 = 0;
                foreach ($this->videoUrls as $item1) {
                    $res['VideoUrls'][$n1++] = $item1;
                }
            }
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

        if (isset($map['VideoUrls'])) {
            if (!empty($map['VideoUrls'])) {
                $model->videoUrls = [];
                $n1 = 0;
                foreach ($map['VideoUrls'] as $item1) {
                    $model->videoUrls[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
