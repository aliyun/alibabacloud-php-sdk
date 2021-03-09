<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponseBody;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $select;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $shortTopic;

    /**
     * @var string
     */
    public $where;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $utcCreated;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var int
     */
    public $topicType;
    protected $_name = [
        'id'           => 'Id',
        'select'       => 'Select',
        'topic'        => 'Topic',
        'shortTopic'   => 'ShortTopic',
        'where'        => 'Where',
        'status'       => 'Status',
        'createUserId' => 'CreateUserId',
        'productKey'   => 'ProductKey',
        'name'         => 'Name',
        'ruleDesc'     => 'RuleDesc',
        'dataType'     => 'DataType',
        'created'      => 'Created',
        'utcCreated'   => 'UtcCreated',
        'modified'     => 'Modified',
        'utcModified'  => 'UtcModified',
        'topicType'    => 'TopicType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->shortTopic) {
            $res['ShortTopic'] = $this->shortTopic;
        }
        if (null !== $this->where) {
            $res['Where'] = $this->where;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }
        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['ShortTopic'])) {
            $model->shortTopic = $map['ShortTopic'];
        }
        if (isset($map['Where'])) {
            $model->where = $map['Where'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }
        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }

        return $model;
    }
}
