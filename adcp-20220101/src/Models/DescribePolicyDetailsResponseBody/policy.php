<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @example enforce
     *
     * @var string
     */
    public $action;

    /**
     * @example k8s-general
     *
     * @var string
     */
    public $category;

    /**
     * @example 2021-11-18T10:52:17+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @example Requires container images to begin with a repo string from a specified list
     *
     * @var string
     */
    public $description;

    /**
     * @example ACKAllowedRepos
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $noConfig;

    /**
     * @example high
     *
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $template;

    /**
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
