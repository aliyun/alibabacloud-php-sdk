<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @description The version ID of the current relationship.
     *
     * @example 1487
     *
     * @var string
     */
    public $currentVersionId;

    /**
     * @description The direction of the current relationship. Valid values:
     *
     *   **1**: forward
     *   **0**: reverse
     *
     * @example 1
     *
     * @var int
     */
    public $directed;

    /**
     * @description The display color of the current relationship.
     *
     * @example #FFF
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description The display icon of the current relationship.
     *
     * @example https://img.alicdn.com/imgextra/i2/O1CN01jpZwD31G56XYPEJv2_!!600000000****-55-tps-25-28.svg
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @description The display template of the current relationship.
     *
     * @example []
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @description The time when the current relationship was created.
     *
     * @example 2022-09-23T10:50Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the current relationship was updated.
     *
     * @example 2022-07-12T07:58:49Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the current relationship.
     *
     * @example 1514
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the current relationship. Valid values include the following values:
     *
     *   **process_exec_file**: The relationship indicates an executable file that is run by a process.
     *   **process_connect_ip**: The relationship indicates an IP address that is connected by a process.
     *   **domain_trgger_alert**: The relationship indicates an alert that is triggered for a domain name.
     *
     * @example wusa
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the current relationship.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The display type of the current relationship.
     *
     * @example 0
     *
     * @var string
     */
    public $showType;

    /**
     * @description The synchronization ID of the current relationship.
     *
     * @example sync-0000aws50gyy2ocisbmx
     *
     * @var int
     */
    public $syncId;
    protected $_name = [
        'currentVersionId' => 'CurrentVersionId',
        'directed'         => 'Directed',
        'displayColor'     => 'DisplayColor',
        'displayIcon'      => 'DisplayIcon',
        'displayTemplate'  => 'DisplayTemplate',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'showType'         => 'ShowType',
        'syncId'           => 'SyncId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentVersionId) {
            $res['CurrentVersionId'] = $this->currentVersionId;
        }
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }
        if (null !== $this->displayTemplate) {
            $res['DisplayTemplate'] = $this->displayTemplate;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }
        if (null !== $this->syncId) {
            $res['SyncId'] = $this->syncId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersionId'])) {
            $model->currentVersionId = $map['CurrentVersionId'];
        }
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }
        if (isset($map['DisplayTemplate'])) {
            $model->displayTemplate = $map['DisplayTemplate'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }
        if (isset($map['SyncId'])) {
            $model->syncId = $map['SyncId'];
        }

        return $model;
    }
}
