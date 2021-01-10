<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowResponseBody;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $prodVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $editMode;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $flowId;
    protected $_name = [
        'status'         => 'Status',
        'prodVersion'    => 'ProdVersion',
        'description'    => 'Description',
        'createdAt'      => 'CreatedAt',
        'currentVersion' => 'CurrentVersion',
        'editMode'       => 'EditMode',
        'updatedAt'      => 'UpdatedAt',
        'source'         => 'Source',
        'name'           => 'Name',
        'flowId'         => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->prodVersion) {
            $res['ProdVersion'] = $this->prodVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->editMode) {
            $res['EditMode'] = $this->editMode;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProdVersion'])) {
            $model->prodVersion = $map['ProdVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['EditMode'])) {
            $model->editMode = $map['EditMode'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
