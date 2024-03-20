<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetLayerResponseBody extends Model
{
    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $laboratoryId;

    /**
     * @example layer1
     *
     * @var string
     */
    public $name;

    /**
     * @description Id of the request
     *
     * @example EE97D06A-2AA0-5AD9-B6CF-8A267924D691
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $residualFlow;

    /**
     * @example 4
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'description'   => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'laboratoryId'  => 'LaboratoryId',
        'name'          => 'Name',
        'requestId'     => 'RequestId',
        'residualFlow'  => 'ResidualFlow',
        'sceneId'       => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->residualFlow) {
            $res['ResidualFlow'] = $this->residualFlow;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLayerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResidualFlow'])) {
            $model->residualFlow = $map['ResidualFlow'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
