<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;

use AlibabaCloud\Tea\Model;

class entityTypeList extends Model
{
    /**
     * @description The version of the entity.
     *
     * @example 993
     *
     * @var string
     */
    public $currentVersionId;

    /**
     * @description The display color of the entity.
     *
     * @example red
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description The display icon of the entity.
     *
     * @example http://img.22222.com
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @description The display order of the entity.
     *
     * @example 01
     *
     * @var int
     */
    public $displayOrder;

    /**
     * @description The display template of the entity.
     *
     * @example template1
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @description The time when the entity was created.
     *
     * @example 2022-09-23T10:50Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the entity was updated.
     *
     * @example 1623317089000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the entity.
     *
     * @example 33926
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether the entity is a virtual node.
     *
     * @example true
     *
     * @var int
     */
    public $isVirtualNode;

    /**
     * @description The name of the entity.
     *
     * @example auto-test-policy-name
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the entity.
     *
     * @example 78
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The synchronization ID of the entity.
     *
     * @example 3212024a-1816-46d5-b286-e5d5780fd778
     *
     * @var int
     */
    public $syncId;

    /**
     * @description Indicates whether the entity is traced. Valid values:
     *
     *   **1**: The entity is traced.
     *   **0**: The entity fails to be traced.
     *
     * @example true
     *
     * @var int
     */
    public $traceSuccessFlag;
    protected $_name = [
        'currentVersionId' => 'CurrentVersionId',
        'displayColor'     => 'DisplayColor',
        'displayIcon'      => 'DisplayIcon',
        'displayOrder'     => 'DisplayOrder',
        'displayTemplate'  => 'DisplayTemplate',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'isVirtualNode'    => 'IsVirtualNode',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'syncId'           => 'SyncId',
        'traceSuccessFlag' => 'TraceSuccessFlag',
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
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
        }
        if (null !== $this->displayIcon) {
            $res['DisplayIcon'] = $this->displayIcon;
        }
        if (null !== $this->displayOrder) {
            $res['DisplayOrder'] = $this->displayOrder;
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
        if (null !== $this->isVirtualNode) {
            $res['IsVirtualNode'] = $this->isVirtualNode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->syncId) {
            $res['SyncId'] = $this->syncId;
        }
        if (null !== $this->traceSuccessFlag) {
            $res['TraceSuccessFlag'] = $this->traceSuccessFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentVersionId'])) {
            $model->currentVersionId = $map['CurrentVersionId'];
        }
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
        }
        if (isset($map['DisplayIcon'])) {
            $model->displayIcon = $map['DisplayIcon'];
        }
        if (isset($map['DisplayOrder'])) {
            $model->displayOrder = $map['DisplayOrder'];
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
        if (isset($map['IsVirtualNode'])) {
            $model->isVirtualNode = $map['IsVirtualNode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['SyncId'])) {
            $model->syncId = $map['SyncId'];
        }
        if (isset($map['TraceSuccessFlag'])) {
            $model->traceSuccessFlag = $map['TraceSuccessFlag'];
        }

        return $model;
    }
}
