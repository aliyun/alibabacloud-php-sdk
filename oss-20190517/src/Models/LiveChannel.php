<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LiveChannel extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var LiveChannelPlayUrls
     */
    public $playUrls;

    /**
     * @var LiveChannelPublishUrls
     */
    public $publishUrls;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'  => 'Description',
        'lastModified' => 'LastModified',
        'name'         => 'Name',
        'playUrls'     => 'PlayUrls',
        'publishUrls'  => 'PublishUrls',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->playUrls) {
            $res['PlayUrls'] = null !== $this->playUrls ? $this->playUrls->toMap() : null;
        }
        if (null !== $this->publishUrls) {
            $res['PublishUrls'] = null !== $this->publishUrls ? $this->publishUrls->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiveChannel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PlayUrls'])) {
            $model->playUrls = LiveChannelPlayUrls::fromMap($map['PlayUrls']);
        }
        if (isset($map['PublishUrls'])) {
            $model->publishUrls = LiveChannelPublishUrls::fromMap($map['PublishUrls']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
