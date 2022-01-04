<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models;

use AlibabaCloud\Tea\Model;

class ElementSmartVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $certFile;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certNationalEmblemUrl;

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
    public $certUrl;

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
    protected $_name = [
        'certFile'              => 'CertFile',
        'certName'              => 'CertName',
        'certNationalEmblemUrl' => 'CertNationalEmblemUrl',
        'certNo'                => 'CertNo',
        'certType'              => 'CertType',
        'certUrl'               => 'CertUrl',
        'mode'                  => 'Mode',
        'outerOrderNo'          => 'OuterOrderNo',
        'sceneId'               => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certFile) {
            $res['CertFile'] = $this->certFile;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certNationalEmblemUrl) {
            $res['CertNationalEmblemUrl'] = $this->certNationalEmblemUrl;
        }
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certUrl) {
            $res['CertUrl'] = $this->certUrl;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ElementSmartVerifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertFile'])) {
            $model->certFile = $map['CertFile'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertNationalEmblemUrl'])) {
            $model->certNationalEmblemUrl = $map['CertNationalEmblemUrl'];
        }
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertUrl'])) {
            $model->certUrl = $map['CertUrl'];
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

        return $model;
    }
}
