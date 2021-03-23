<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $contentId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $sandboxDeployTime;

    /**
     * @var int
     */
    public $productionDeployTime;

    /**
     * @var int
     */
    public $sandboxDeployStatus;

    /**
     * @var int
     */
    public $productionDeployStatus;
    protected $_name = [
        'id'                     => 'Id',
        'name'                   => 'Name',
        'contentId'              => 'ContentId',
        'status'                 => 'Status',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'description'            => 'Description',
        'sandboxDeployTime'      => 'SandboxDeployTime',
        'productionDeployTime'   => 'ProductionDeployTime',
        'sandboxDeployStatus'    => 'SandboxDeployStatus',
        'productionDeployStatus' => 'ProductionDeployStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sandboxDeployTime) {
            $res['SandboxDeployTime'] = $this->sandboxDeployTime;
        }
        if (null !== $this->productionDeployTime) {
            $res['ProductionDeployTime'] = $this->productionDeployTime;
        }
        if (null !== $this->sandboxDeployStatus) {
            $res['SandboxDeployStatus'] = $this->sandboxDeployStatus;
        }
        if (null !== $this->productionDeployStatus) {
            $res['ProductionDeployStatus'] = $this->productionDeployStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SandboxDeployTime'])) {
            $model->sandboxDeployTime = $map['SandboxDeployTime'];
        }
        if (isset($map['ProductionDeployTime'])) {
            $model->productionDeployTime = $map['ProductionDeployTime'];
        }
        if (isset($map['SandboxDeployStatus'])) {
            $model->sandboxDeployStatus = $map['SandboxDeployStatus'];
        }
        if (isset($map['ProductionDeployStatus'])) {
            $model->productionDeployStatus = $map['ProductionDeployStatus'];
        }

        return $model;
    }
}
