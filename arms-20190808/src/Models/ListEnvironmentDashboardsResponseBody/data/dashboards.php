<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dashboards extends Model
{
    /**
     * @description The UID of the folder.
     *
     * @example 1374923841627893
     *
     * @var string
     */
    public $folderUid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The keyword.
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description The title of the Grafana dashboard.
     *
     * @example kafka-instance
     *
     * @var string
     */
    public $title;

    /**
     * @description The unique identifier of the dashboard.
     *
     * @example 1537863211936042
     *
     * @var string
     */
    public $uid;

    /**
     * @description The complete URL of the dashboard.
     *
     * @example http://xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'folderUid' => 'FolderUid',
        'region'    => 'Region',
        'tags'      => 'Tags',
        'title'     => 'Title',
        'uid'       => 'Uid',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderUid) {
            $res['FolderUid'] = $this->folderUid;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashboards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FolderUid'])) {
            $model->folderUid = $map['FolderUid'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
