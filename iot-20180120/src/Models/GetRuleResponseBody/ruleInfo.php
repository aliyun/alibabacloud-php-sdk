<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponseBody;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @example 100000000000000
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example Thu Feb 28 14:14:33 CST 2019
     *
     * @var string
     */
    public $created;

    /**
     * @example JSON
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 100000
     *
     * @var int
     */
    public $id;

    /**
     * @example Thu Feb 28 14:20:58 CST 2019
     *
     * @var string
     */
    public $modified;

    /**
     * @example iotrules
     *
     * @var string
     */
    public $name;

    /**
     * @example a1KiV******
     *
     * @var string
     */
    public $productKey;

    /**
     * @example rule1Desc
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @example deviceName() as deviceName
     *
     * @var string
     */
    public $select;

    /**
     * @example +/user/pm25data
     *
     * @var string
     */
    public $shortTopic;

    /**
     * @example STOP
     *
     * @var string
     */
    public $status;

    /**
     * @example /a1QsMlL44pp/+/user/pm25data
     *
     * @var string
     */
    public $topic;

    /**
     * @example 1
     *
     * @var int
     */
    public $topicType;

    /**
     * @example 2019-02-28T06:14:33.000Z
     *
     * @var string
     */
    public $utcCreated;

    /**
     * @example 2019-02-28T06:20:58.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @example Temperature>35
     *
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
