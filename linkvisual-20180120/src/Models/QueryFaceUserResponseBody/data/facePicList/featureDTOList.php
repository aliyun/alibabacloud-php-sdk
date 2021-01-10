<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserResponseBody\data\facePicList;

use AlibabaCloud\Tea\Model;

class featureDTOList extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $algorithmVersion;

    /**
     * @var string
     */
    public $algorithmProvider;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $faceMd5;
    protected $_name = [
        'algorithmName'     => 'AlgorithmName',
        'algorithmVersion'  => 'AlgorithmVersion',
        'algorithmProvider' => 'AlgorithmProvider',
        'errorMessage'      => 'ErrorMessage',
        'errorCode'         => 'ErrorCode',
        'faceMd5'           => 'FaceMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->faceMd5) {
            $res['FaceMd5'] = $this->faceMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['FaceMd5'])) {
            $model->faceMd5 = $map['FaceMd5'];
        }

        return $model;
    }
}
