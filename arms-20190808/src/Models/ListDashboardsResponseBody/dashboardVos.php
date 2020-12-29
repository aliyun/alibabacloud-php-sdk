<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponseBody;

use AlibabaCloud\Tea\Model;

class dashboardVos extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $exporter;

    /**
     * @var bool
     */
    public $isArmsExporter;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'type'           => 'Type',
        'time'           => 'Time',
        'exporter'       => 'Exporter',
        'isArmsExporter' => 'IsArmsExporter',
        'url'            => 'Url',
        'tags'           => 'Tags',
        'title'          => 'Title',
        'id'             => 'Id',
        'uid'            => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->exporter) {
            $res['Exporter'] = $this->exporter;
        }
        if (null !== $this->isArmsExporter) {
            $res['IsArmsExporter'] = $this->isArmsExporter;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Exporter'])) {
            $model->exporter = $map['Exporter'];
        }
        if (isset($map['IsArmsExporter'])) {
            $model->isArmsExporter = $map['IsArmsExporter'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
