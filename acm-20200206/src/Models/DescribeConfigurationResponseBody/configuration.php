<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models\DescribeConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @example Hello World
     *
     * @var string
     */
    public $content;

    /**
     * @example com.aliyun.acm.example
     *
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @example 18d2e20****
     *
     * @var string
     */
    public $md5;

    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appName'     => 'AppName',
        'content'     => 'Content',
        'dataId'      => 'DataId',
        'desc'        => 'Desc',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'group'       => 'Group',
        'md5'         => 'Md5',
        'tags'        => 'Tags',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
