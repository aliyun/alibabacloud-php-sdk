<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyDetailsResponseBody extends Model
{
    /**
     * @description The action of the policy. Valid values:
     *
     *   `enforce`: blocks deployments that match the policy.
     *   `inform`: generates alerts for deployments that match the policy.
     *
     * @example enforce
     *
     * @var string
     */
    public $action;

    /**
     * @description The type of the policy.
     *
     * @example k8s-general
     *
     * @var string
     */
    public $category;

    /**
     * @description The description of the policy.
     *
     * @example Requires container images to begin with a repo string from a specified list
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the policy is deleted. Valid values:
     *
     *   0: The policy is not deleted.
     *   1: The policy is deleted.
     *
     * @example 0
     *
     * @var int
     */
    public $isDeleted;

    /**
     * @description The name of the policy that is returned.
     *
     * @example ACKAllowedRepos
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether parameters are required. Valid values:
     *
     *   0: Parameters are required.
     *   1: Parameters are optional.
     *
     * @example 0
     *
     * @var int
     */
    public $noConfig;

    /**
     * @description The severity level of the policy. Valid values:
     *
     *   `high`
     *   `medium`
     *   `low`
     *
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @description The content of the policy.
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
