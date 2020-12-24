<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ContrastSmartVerifyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $facePicFileObject;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $userId;

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
    public $facePicUrl;

    /**
     * @var string
     */
    public $facePicString;
    protected $_name = [
        'facePicFileObject' => 'FacePicFileObject',
        'sceneId'           => 'SceneId',
        'outerOrderNo'      => 'OuterOrderNo',
        'mode'              => 'Mode',
        'certType'          => 'CertType',
        'mobile'            => 'Mobile',
        'ip'                => 'Ip',
        'userId'            => 'UserId',
        'certName'          => 'CertName',
        'certNo'            => 'CertNo',
        'facePicUrl'        => 'FacePicUrl',
        'facePicString'     => 'FacePicString',
    ];

    public function validate()
    {
        Model::validateRequired('facePicFileObject', $this->facePicFileObject, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('outerOrderNo', $this->outerOrderNo, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('certType', $this->certType, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certNo', $this->certNo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facePicFileObject) {
            $res['FacePicFileObject'] = $this->facePicFileObject;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->facePicUrl) {
            $res['FacePicUrl'] = $this->facePicUrl;
        }
        if (null !== $this->facePicString) {
            $res['FacePicString'] = $this->facePicString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContrastSmartVerifyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FacePicFileObject'])) {
            $model->facePicFileObject = $map['FacePicFileObject'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['FacePicUrl'])) {
            $model->facePicUrl = $map['FacePicUrl'];
        }
        if (isset($map['FacePicString'])) {
            $model->facePicString = $map['FacePicString'];
        }

        return $model;
    }
}
