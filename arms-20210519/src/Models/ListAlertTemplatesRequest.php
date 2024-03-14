<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class ListAlertTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $alertProvider;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $templateProvider;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertProvider'    => 'AlertProvider',
        'labels'           => 'Labels',
        'name'             => 'Name',
        'regionId'         => 'RegionId',
        'status'           => 'Status',
        'templateProvider' => 'TemplateProvider',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertProvider) {
            $res['AlertProvider'] = $this->alertProvider;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateProvider) {
            $res['TemplateProvider'] = $this->templateProvider;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertProvider'])) {
            $model->alertProvider = $map['AlertProvider'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateProvider'])) {
            $model->templateProvider = $map['TemplateProvider'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
