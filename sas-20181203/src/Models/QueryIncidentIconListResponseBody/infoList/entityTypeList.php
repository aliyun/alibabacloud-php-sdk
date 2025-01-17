<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList;

use AlibabaCloud\Dara\Model;

class entityTypeList extends Model
{
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
    public $displayOrder;
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
    public $isVirtualNode;
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
    public $traceSuccessFlag;
    protected $_name = [
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
        'traceSuccessFlag' => 'TraceSuccessFlag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->traceSuccessFlag) {
            $res['TraceSuccessFlag'] = $this->traceSuccessFlag;
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

        if (isset($map['TraceSuccessFlag'])) {
            $model->traceSuccessFlag = $map['TraceSuccessFlag'];
        }

        return $model;
    }
}
