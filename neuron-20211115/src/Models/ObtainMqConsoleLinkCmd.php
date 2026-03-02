<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ObtainMqConsoleLinkCmd extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $mqGroupId;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'env' => 'env',
        'groupType' => 'groupType',
        'mqGroupId' => 'mqGroupId',
        'pbcId' => 'pbcId',
        'serviceName' => 'serviceName',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->mqGroupId) {
            $res['mqGroupId'] = $this->mqGroupId;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['mqGroupId'])) {
            $model->mqGroupId = $map['mqGroupId'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
