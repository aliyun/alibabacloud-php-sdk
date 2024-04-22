<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description The action of the policy. Valid values:
     *
     *   enforce: blocks deployments that match the policy.
     *   inform: generates alerts for deployments that match the policy.
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
     * @description The time when the policy was created.
     *
     * @example 2021-11-18T10:52:17+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The description of the policy.
     *
     * @example Requires container images to begin with a repo string from a specified list
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the policy.
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
     *   1: Parameters are not required.
     *
     * @example 0
     *
     * @var int
     */
    public $noConfig;

    /**
     * @description The severity level of the policy.
     *
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @description The content of the policy.
     *
     * @example The content of the policy.
     *
     * @var string
     */
    public $template;

    /**
     * @description The time when the policy was last updated.
     *
     * @example 2021-11-18T10:52:17+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'action'      => 'Action',
        'category'    => 'Category',
        'created'     => 'Created',
        'description' => 'Description',
        'name'        => 'Name',
        'noConfig'    => 'NoConfig',
        'severity'    => 'Severity',
        'template'    => 'Template',
        'updated'     => 'Updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->noConfig) {
            $res['NoConfig'] = $this->noConfig;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NoConfig'])) {
            $model->noConfig = $map['NoConfig'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }

        return $model;
    }
}
