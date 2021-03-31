<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ElementSmartVerifyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $certFileObject;

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
    public $certName;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certUrl;

    /**
     * @var string
     */
    public $certNationalEmblemUrl;
    protected $_name = [
        'certFileObject'        => 'CertFileObject',
        'sceneId'               => 'SceneId',
        'outerOrderNo'          => 'OuterOrderNo',
        'mode'                  => 'Mode',
        'certType'              => 'CertType',
        'certName'              => 'CertName',
        'certNo'                => 'CertNo',
        'certUrl'               => 'CertUrl',
        'certNationalEmblemUrl' => 'CertNationalEmblemUrl',
    ];

    public function validate()
    {
        Model::validateRequired('certFileObject', $this->certFileObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certFileObject) {
            $res['CertFileObject'] = $this->certFileObject;
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
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->certUrl) {
            $res['CertUrl'] = $this->certUrl;
        }
        if (null !== $this->certNationalEmblemUrl) {
            $res['CertNationalEmblemUrl'] = $this->certNationalEmblemUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ElementSmartVerifyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertFileObject'])) {
            $model->certFileObject = $map['CertFileObject'];
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['CertUrl'])) {
            $model->certUrl = $map['CertUrl'];
        }
        if (isset($map['CertNationalEmblemUrl'])) {
            $model->certNationalEmblemUrl = $map['CertNationalEmblemUrl'];
        }

        return $model;
    }
}
