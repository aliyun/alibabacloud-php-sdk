<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveDatabasesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Default Hive database
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1568010630000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1568010630000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example hdfs://emr-header-1.cluster-136574:9000/user/hive/warehouse
     *
     * @var string
     */
    public $location;

    /**
     * @example default
     *
     * @var string
     */
    public $name;

    /**
     * @example public
     *
     * @var string
     */
    public $owner;

    /**
     * @example 18612767
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example ROLE
     *
     * @var string
     */
    public $ownerType;

    /**
     * @example {}
     *
     * @var string
     */
    public $parameters;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example -
     *
     * @var string
     */
    public $status;

    /**
     * @example HIVE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment'     => 'Comment',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'location'    => 'Location',
        'name'        => 'Name',
        'owner'       => 'Owner',
        'ownerId'     => 'OwnerId',
        'ownerType'   => 'OwnerType',
        'parameters'  => 'Parameters',
        'region'      => 'Region',
        'status'      => 'Status',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
