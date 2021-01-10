<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateModelRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var int
     */
    public $algorithmId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $modelPackageStandard;

    /**
     * @var string
     */
    public $hardware;

    /**
     * @var string
     */
    public $uploadModelPath;

    /**
     * @var bool
     */
    public $needEncrypt;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'apiRevision'          => 'ApiRevision',
        'algorithmId'          => 'AlgorithmId',
        'name'                 => 'Name',
        'modelPackageStandard' => 'ModelPackageStandard',
        'hardware'             => 'Hardware',
        'uploadModelPath'      => 'UploadModelPath',
        'needEncrypt'          => 'NeedEncrypt',
        'description'          => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->modelPackageStandard) {
            $res['ModelPackageStandard'] = $this->modelPackageStandard;
        }
        if (null !== $this->hardware) {
            $res['Hardware'] = $this->hardware;
        }
        if (null !== $this->uploadModelPath) {
            $res['UploadModelPath'] = $this->uploadModelPath;
        }
        if (null !== $this->needEncrypt) {
            $res['NeedEncrypt'] = $this->needEncrypt;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ModelPackageStandard'])) {
            $model->modelPackageStandard = $map['ModelPackageStandard'];
        }
        if (isset($map['Hardware'])) {
            $model->hardware = $map['Hardware'];
        }
        if (isset($map['UploadModelPath'])) {
            $model->uploadModelPath = $map['UploadModelPath'];
        }
        if (isset($map['NeedEncrypt'])) {
            $model->needEncrypt = $map['NeedEncrypt'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
