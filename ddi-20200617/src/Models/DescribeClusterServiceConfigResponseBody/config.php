<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\configValueList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $applied;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $configVersion;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var configValueList
     */
    public $configValueList;

    /**
     * @var propertyInfoList
     */
    public $propertyInfoList;
    protected $_name = [
        'applied'          => 'Applied',
        'comment'          => 'Comment',
        'createTime'       => 'CreateTime',
        'configVersion'    => 'ConfigVersion',
        'author'           => 'Author',
        'serviceName'      => 'ServiceName',
        'configValueList'  => 'ConfigValueList',
        'propertyInfoList' => 'PropertyInfoList',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->configVersion) {
            $res['ConfigVersion'] = $this->configVersion;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->configValueList) {
            $res['ConfigValueList'] = null !== $this->configValueList ? $this->configValueList->toMap() : null;
        }
        if (null !== $this->propertyInfoList) {
            $res['PropertyInfoList'] = null !== $this->propertyInfoList ? $this->propertyInfoList->toMap() : null;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConfigVersion'])) {
            $model->configVersion = $map['ConfigVersion'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ConfigValueList'])) {
            $model->configValueList = configValueList::fromMap($map['ConfigValueList']);
        }
        if (isset($map['PropertyInfoList'])) {
            $model->propertyInfoList = propertyInfoList::fromMap($map['PropertyInfoList']);
        }

        return $model;
    }
}
