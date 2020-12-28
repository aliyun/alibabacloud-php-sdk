<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'type'    => 'Type',
        'appName' => 'AppName',
        'tags'    => 'Tags',
        'md5'     => 'Md5',
        'dataId'  => 'DataId',
        'content' => 'Content',
        'group'   => 'Group',
        'desc'    => 'Desc',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
