<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponseBody;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $ruleDesc;

    /**
     * @var string
     */
    public $select;

    /**
     * @var string
     */
    public $shortTopic;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $topicType;

    /**
     * @var string
     */
    public $utcCreated;

    /**
     * @var string
     */
    public $utcModified;

    /**
     * @var string
     */
    public $where;
    protected $_name = [
        'createUserId' => 'CreateUserId',
        'created'      => 'Created',
        'dataType'     => 'DataType',
        'id'           => 'Id',
        'modified'     => 'Modified',
        'name'         => 'Name',
        'productKey'   => 'ProductKey',
        'ruleDesc'     => 'RuleDesc',
        'select'       => 'Select',
        'shortTopic'   => 'ShortTopic',
        'status'       => 'Status',
        'topic'        => 'Topic',
        'topicType'    => 'TopicType',
        'utcCreated'   => 'UtcCreated',
        'utcModified'  => 'UtcModified',
        'where'        => 'Where',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->ruleDesc) {
            $res['RuleDesc'] = $this->ruleDesc;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->shortTopic) {
            $res['ShortTopic'] = $this->shortTopic;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->where) {
            $res['Where'] = $this->where;
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
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['RuleDesc'])) {
            $model->ruleDesc = $map['RuleDesc'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['ShortTopic'])) {
            $model->shortTopic = $map['ShortTopic'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['Where'])) {
            $model->where = $map['Where'];
        }

        return $model;
    }
}
