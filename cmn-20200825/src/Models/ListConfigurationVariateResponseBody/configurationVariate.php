<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListConfigurationVariateResponseBody;

use AlibabaCloud\Tea\Model;

class configurationVariate extends Model
{
    /**
     * @example 主机名
     *
     * @var string
     */
    public $comment;

    /**
     * @example kkoo
     *
     * @var string
     */
    public $configurationVariateId;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example def main():
     *
     * @var string
     */
    public $formatFunction;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example hostname
     *
     * @var string
     */
    public $variateName;
    protected $_name = [
        'comment'                => 'Comment',
        'configurationVariateId' => 'ConfigurationVariateId',
        'createTime'             => 'CreateTime',
        'formatFunction'         => 'FormatFunction',
        'updateTime'             => 'UpdateTime',
        'variateName'            => 'VariateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configurationVariateId) {
            $res['ConfigurationVariateId'] = $this->configurationVariateId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->formatFunction) {
            $res['FormatFunction'] = $this->formatFunction;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->variateName) {
            $res['VariateName'] = $this->variateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configurationVariate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigurationVariateId'])) {
            $model->configurationVariateId = $map['ConfigurationVariateId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FormatFunction'])) {
            $model->formatFunction = $map['FormatFunction'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VariateName'])) {
            $model->variateName = $map['VariateName'];
        }

        return $model;
    }
}
