<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config\configValueList;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $applied;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var configValueList
     */
    public $configValueList;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'applied'         => 'Applied',
        'author'          => 'Author',
        'comment'         => 'Comment',
        'configValueList' => 'ConfigValueList',
        'configVersion'   => 'ConfigVersion',
        'createTime'      => 'CreateTime',
        'serviceName'     => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applied) {
            $res['Applied'] = $this->applied;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configValueList) {
            $res['ConfigValueList'] = null !== $this->configValueList ? $this->configValueList->toMap() : null;
        }
        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applied'])) {
            $model->applied = $map['Applied'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigValueList'])) {
            $model->configValueList = configValueList::fromMap($map['ConfigValueList']);
        }
        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
