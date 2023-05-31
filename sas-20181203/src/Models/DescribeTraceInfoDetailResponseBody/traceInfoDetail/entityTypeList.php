<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

use AlibabaCloud\Tea\Model;

class entityTypeList extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example Deprecated
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The rendering color of the vertex.
     *
     * @example #fff
     *
     * @var string
     */
    public $displayColor;

    /**
     * @description The icon style of the vertex.
     *
     * @example https://img.alicdn.com/tfs/TB176P5OgDqK1RjSZSyXXaxEVXa-49-48.png
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @description This parameter is deprecated.
     *
     * @example [{"name":"${logtime}","value":"$!{time}"}]
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @description The timestamp when the vertex was created.
     *
     * @example 2022-10-09T11:47Z
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the vertex was last modified.
     *
     * @example 2022-10-09T11:47Z
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the vertex type.
     *
     * @example Alert
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is deprecated.
     *
     * @example Deprecated
     *
     * @var int
     */
    public $limit;

    /**
     * @description The name of the vertex type.
     *
     * @example Alert
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example *
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is deprecated.
     *
     * @example Deprecated
     *
     * @var int
     */
    public $offset;
    protected $_name = [
        'dbId'            => 'DbId',
        'displayColor'    => 'DisplayColor',
        'displayIcon'     => 'DisplayIcon',
        'displayTemplate' => 'DisplayTemplate',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'limit'           => 'Limit',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'offset'          => 'Offset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        return $model;
    }
}
