<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @description The version of the relationship.
     *
     * @example 1487
     *
     * @var string
     */
    public $currentVersionId;

    /**
     * @description The display icon of the relationship.
     *
     * @example http://img.33.com
     *
     * @var string
     */
    public $DIsplayIcon;

    /**
     * @description The direction of the relationship. Valid values:
     *
     *   **1**: forward.
     *   **0**: reverse.
     *
     * @example in
     *
     * @var int
     */
    public $directed;

    /**
     * @description The display color of the relationship.
     *
     * @example red
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description The display template of the relationship.
     *
     * @example template1
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @description The time when the relationship was created.
     *
     * @example 2022-08-02T10:20Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the relationship was updated.
     *
     * @example 1637556498000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the relationship.
     *
     * @example 9350
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the relationship.
     *
     * @example mongod
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the relationship.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The display type of the relationship.
     *
     * @example type1
     *
     * @var string
     */
    public $showType;

    /**
     * @description The synchronization ID of the relationship.
     *
     * @example a45185c7-b1b8-4a49-b04a-d6bfa051ef0e
     *
     * @var int
     */
    public $syncId;
    protected $_name = [
        'currentVersionId' => 'CurrentVersionId',
        'DIsplayIcon'      => 'DIsplayIcon',
        'directed'         => 'Directed',
        'displayColor'     => 'DisplayColor',
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
        if (null !== $this->DIsplayIcon) {
            $res['DIsplayIcon'] = $this->DIsplayIcon;
        }
        if (null !== $this->directed) {
            $res['Directed'] = $this->directed;
        }
        if (null !== $this->displayColor) {
            $res['DisplayColor'] = $this->displayColor;
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
        if (isset($map['DIsplayIcon'])) {
            $model->DIsplayIcon = $map['DIsplayIcon'];
        }
        if (isset($map['Directed'])) {
            $model->directed = $map['Directed'];
        }
        if (isset($map['DisplayColor'])) {
            $model->displayColor = $map['DisplayColor'];
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
