<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponseBody\dashboardVos;

use AlibabaCloud\Dara\Model;

class i18nChild extends Model
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
    public $httpUrl;

    /**
     * @var string
     */
    public $httpsUrl;

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
    public $language;

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
        'dashboardType' => 'DashboardType',
        'exporter' => 'Exporter',
        'httpUrl' => 'HttpUrl',
        'httpsUrl' => 'HttpsUrl',
        'id' => 'Id',
        'isArmsExporter' => 'IsArmsExporter',
        'kind' => 'Kind',
        'language' => 'Language',
        'name' => 'Name',
        'needUpdate' => 'NeedUpdate',
        'tags' => 'Tags',
        'time' => 'Time',
        'title' => 'Title',
        'type' => 'Type',
        'uid' => 'Uid',
        'url' => 'Url',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardType) {
            $res['DashboardType'] = $this->dashboardType;
        }

        if (null !== $this->exporter) {
            $res['Exporter'] = $this->exporter;
        }

        if (null !== $this->httpUrl) {
            $res['HttpUrl'] = $this->httpUrl;
        }

        if (null !== $this->httpsUrl) {
            $res['HttpsUrl'] = $this->httpsUrl;
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

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needUpdate) {
            $res['NeedUpdate'] = $this->needUpdate;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardType'])) {
            $model->dashboardType = $map['DashboardType'];
        }

        if (isset($map['Exporter'])) {
            $model->exporter = $map['Exporter'];
        }

        if (isset($map['HttpUrl'])) {
            $model->httpUrl = $map['HttpUrl'];
        }

        if (isset($map['HttpsUrl'])) {
            $model->httpsUrl = $map['HttpsUrl'];
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

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedUpdate'])) {
            $model->needUpdate = $map['NeedUpdate'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
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
