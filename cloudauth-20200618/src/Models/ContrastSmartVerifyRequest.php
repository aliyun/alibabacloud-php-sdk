<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class ContrastSmartVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $facePicFile;

    /**
     * @var string
     */
    public $facePicString;

    /**
     * @var string
     */
    public $facePicUrl;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'certName'      => 'CertName',
        'certNo'        => 'CertNo',
        'certType'      => 'CertType',
        'facePicFile'   => 'FacePicFile',
        'facePicString' => 'FacePicString',
        'facePicUrl'    => 'FacePicUrl',
        'ip'            => 'Ip',
        'mobile'        => 'Mobile',
        'mode'          => 'Mode',
        'outerOrderNo'  => 'OuterOrderNo',
        'sceneId'       => 'SceneId',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->facePicFile) {
            $res['FacePicFile'] = $this->facePicFile;
        }
        if (null !== $this->facePicString) {
            $res['FacePicString'] = $this->facePicString;
        }
        if (null !== $this->facePicUrl) {
            $res['FacePicUrl'] = $this->facePicUrl;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContrastSmartVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['FacePicFile'])) {
            $model->facePicFile = $map['FacePicFile'];
        }
        if (isset($map['FacePicString'])) {
            $model->facePicString = $map['FacePicString'];
        }
        if (isset($map['FacePicUrl'])) {
            $model->facePicUrl = $map['FacePicUrl'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
