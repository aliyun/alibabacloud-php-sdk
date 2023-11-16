<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList;

use AlibabaCloud\Tea\Model;

class relationTypeList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $directed;

    /**
     * @example #FFF
     *
     * @var string
     */
    public $displayColor;

    /**
     * @example https://img.alicdn.com/imgextra/i4/O1CN01ft6rvQ22uUX2JsTmv_!!600000******-55-tps-12-12.svg
     *
     * @var string
     */
    public $displayIcon;

    /**
     * @example test_template
     *
     * @var string
     */
    public $displayTemplate;

    /**
     * @example 167660031*****
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-01-04T17:35Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 4556****
     *
     * @var string
     */
    public $id;

    /**
     * @example policy-auto-effs3b
     *
     * @var string
     */
    public $name;

    /**
     * @example lkl-zf-bs-lams
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 0
     *
     * @var string
     */
    public $showType;
    protected $_name = [
        'directed'        => 'Directed',
        'displayColor'    => 'DisplayColor',
        'displayIcon'     => 'DisplayIcon',
        'displayTemplate' => 'DisplayTemplate',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'showType'        => 'ShowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
