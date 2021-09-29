<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $productionDeployTime;

    /**
     * @var int
     */
    public $productionDeployStatus;

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
    public $gmtCreate;

    /**
     * @var int
     */
    public $sandboxDeployStatus;

    /**
     * @var int
     */
    public $gmtModified;

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
    public $id;
    protected $_name = [
        'status'                 => 'Status',
        'productionDeployTime'   => 'ProductionDeployTime',
        'productionDeployStatus' => 'ProductionDeployStatus',
        'description'            => 'Description',
        'sandboxDeployTime'      => 'SandboxDeployTime',
        'gmtCreate'              => 'GmtCreate',
        'sandboxDeployStatus'    => 'SandboxDeployStatus',
        'gmtModified'            => 'GmtModified',
        'name'                   => 'Name',
        'contentId'              => 'ContentId',
        'id'                     => 'Id',
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
        if (null !== $this->productionDeployTime) {
            $res['ProductionDeployTime'] = $this->productionDeployTime;
        }
        if (null !== $this->productionDeployStatus) {
            $res['ProductionDeployStatus'] = $this->productionDeployStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sandboxDeployTime) {
            $res['SandboxDeployTime'] = $this->sandboxDeployTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->sandboxDeployStatus) {
            $res['SandboxDeployStatus'] = $this->sandboxDeployStatus;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProductionDeployTime'])) {
            $model->productionDeployTime = $map['ProductionDeployTime'];
        }
        if (isset($map['ProductionDeployStatus'])) {
            $model->productionDeployStatus = $map['ProductionDeployStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SandboxDeployTime'])) {
            $model->sandboxDeployTime = $map['SandboxDeployTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SandboxDeployStatus'])) {
            $model->sandboxDeployStatus = $map['SandboxDeployStatus'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
