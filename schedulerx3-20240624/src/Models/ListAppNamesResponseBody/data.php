<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppNamesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test-app
     *
     * @var string
     */
    public $appGroupId;

    /**
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 15
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appName'    => 'AppName',
        'id'         => 'Id',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
