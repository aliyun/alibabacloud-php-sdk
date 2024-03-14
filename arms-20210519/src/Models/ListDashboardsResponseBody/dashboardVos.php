<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models\ListDashboardsResponseBody;

use AlibabaCloud\Tea\Model;

class dashboardVos extends Model
{
    /**
     * @var string
     */
    public $dashboardType;

    /**
     * @var string
     */
    public $exporter;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isArmsExporter;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needUpdate;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'dashboardType'  => 'DashboardType',
        'exporter'       => 'Exporter',
        'id'             => 'Id',
        'isArmsExporter' => 'IsArmsExporter',
        'kind'           => 'Kind',
        'name'           => 'Name',
        'needUpdate'     => 'NeedUpdate',
        'tags'           => 'Tags',
        'time'           => 'Time',
        'title'          => 'Title',
        'type'           => 'Type',
        'uid'            => 'Uid',
        'url'            => 'Url',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardType) {
            $res['DashboardType'] = $this->dashboardType;
        }
        if (null !== $this->exporter) {
            $res['Exporter'] = $this->exporter;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isArmsExporter) {
            $res['IsArmsExporter'] = $this->isArmsExporter;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needUpdate) {
            $res['NeedUpdate'] = $this->needUpdate;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboardVos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardType'])) {
            $model->dashboardType = $map['DashboardType'];
        }
        if (isset($map['Exporter'])) {
            $model->exporter = $map['Exporter'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsArmsExporter'])) {
            $model->isArmsExporter = $map['IsArmsExporter'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedUpdate'])) {
            $model->needUpdate = $map['NeedUpdate'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
