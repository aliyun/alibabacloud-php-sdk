<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponseBody\apps;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponseBody\apps\appAttribute\tags;
use AlibabaCloud\Tea\Model;

class appAttribute extends Model
{
    /**
     * @description The ID of the app.
     *
     * @example 20112314518278
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the app.
     *
     * @example CreateApptest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The creation time (UTC) of the app.
     *
     * @example 2016-07-31T04:10:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the app.
     *
     * @example App test
     *
     * @var string
     */
    public $description;

    /**
     * @description Extended Fields.
     *
     * @example 110461946884
     *
     * @var string
     */
    public $extend;

    /**
     * @description The modification time (UTC) of the app.
     *
     * @example 2016-07-31T04:10:19Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'extend'       => 'Extend',
        'modifiedTime' => 'ModifiedTime',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
