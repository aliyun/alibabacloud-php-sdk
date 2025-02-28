<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetLayerResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $laboratoryId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $residualFlow;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
