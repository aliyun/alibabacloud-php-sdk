<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class PolicyDetailInfo extends Model
{
    /**
     * @var string
     */
    public $classId;

    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'classId'     => 'classId',
        'className'   => 'className',
        'config'      => 'config',
        'description' => 'description',
        'name'        => 'name',
        'policyId'    => 'policyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classId) {
            $res['classId'] = $this->classId;
        }
        if (null !== $this->className) {
            $res['className'] = $this->className;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PolicyDetailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['classId'])) {
            $model->classId = $map['classId'];
        }
        if (isset($map['className'])) {
            $model->className = $map['className'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        return $model;
    }
}
