<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyDetailsResponseBody extends Model
{
    /**
     * @description 规则治理动作 ● enforce: 拦截违规部署 ● inform：告警
     *
     * @var string
     */
    public $action;

    /**
     * @description 规则模板类型
     *
     * @var string
     */
    public $category;

    /**
     * @description 规则模板描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 软删除标志：0表示未删除 1表示删除
     *
     * @var int
     */
    public $isDeleted;

    /**
     * @description 策略治理规则名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否需要配置策略： 0表示需要参数配置 1表示无需参数配置
     *
     * @var int
     */
    public $noConfig;

    /**
     * @description 规则治理等级
     *
     * @var string
     */
    public $severity;

    /**
     * @description 规则模板详情
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'action'      => 'action',
        'category'    => 'category',
        'description' => 'description',
        'isDeleted'   => 'is_deleted',
        'name'        => 'name',
        'noConfig'    => 'no_config',
        'severity'    => 'severity',
        'template'    => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->noConfig) {
            $res['no_config'] = $this->noConfig;
        }
        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }
        if (null !== $this->template) {
            $res['template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['is_deleted'])) {
            $model->isDeleted = $map['is_deleted'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['no_config'])) {
            $model->noConfig = $map['no_config'];
        }
        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        return $model;
    }
}
