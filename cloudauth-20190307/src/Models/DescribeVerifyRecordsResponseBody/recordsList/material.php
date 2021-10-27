<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody\recordsList;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody\recordsList\material\idCardInfo;
use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $faceImageUrl;

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
        'faceImageUrl' => 'FaceImageUrl',
        'idCardInfo'   => 'IdCardInfo',
        'idCardName'   => 'IdCardName',
        'idCardNumber' => 'IdCardNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->idCardInfo) {
            $res['IdCardInfo'] = null !== $this->idCardInfo ? $this->idCardInfo->toMap() : null;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
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
