<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList;

use AlibabaCloud\Dara\Model;

class relationTypeList extends Model
{
    /**
     * @var string
     */
    public $directed;
    /**
     * @var string
     */
    public $displayColor;
    /**
     * @var string
     */
    public $displayIcon;
    /**
     * @var string
     */
    public $displayTemplate;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
