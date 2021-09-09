<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse\recordsList;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse\recordsList\material\idCardInfo;
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
     * @var idCardInfo
     */
    public $idCardInfo;
    protected $_name = [
        'faceImageUrl' => 'FaceImageUrl',
        'idCardName'   => 'IdCardName',
        'idCardNumber' => 'IdCardNumber',
        'idCardInfo'   => 'IdCardInfo',
    ];

    public function validate()
    {
        Model::validateRequired('faceImageUrl', $this->faceImageUrl, true);
        Model::validateRequired('idCardName', $this->idCardName, true);
        Model::validateRequired('idCardNumber', $this->idCardNumber, true);
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
        if (isset($map['IdCardInfo'])) {
            $model->idCardInfo = idCardInfo::fromMap($map['IdCardInfo']);
        }

        return $model;
    }
}
