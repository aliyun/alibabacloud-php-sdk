<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleResponseBody;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @description The ID of the user who created the rule.
     *
     * @example 100000000000000
     *
     * @var int
     */
    public $createUserId;

    /**
     * @description The time when the rule was created. The time is displayed in UTC-6.
     *
     * @example Thu Feb 28 14:14:33 CST 2019
     *
     * @var string
     */
    public $created;

    /**
     * @description The data type of the rule. Valid values: **JSON** and **BINARY** .
     *
     * @example JSON
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The ID of the rule.
     *
     * @example 100000
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the rule was last modified. The time is displayed in UTC-6.
     *
     * @example Thu Feb 28 14:20:58 CST 2019
     *
     * @var string
     */
    public $modified;

    /**
     * @description The name of the rule.
     *
     * @example iotrules
     *
     * @var string
     */
    public $name;

    /**
     * @description The ProductKey of the product to which the rule applies.
     *
     * @example a1KiV******
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The description of this rule.
     *
     * @example rule1Desc
     *
     * @var string
     */
    public $ruleDesc;

    /**
     * @description The values of **Select** in the SQL statements of the rule.
     *
     * @example deviceName() as deviceName
     *
     * @var string
     */
    public $select;

    /**
     * @description The topic to which the rule applies. The topic does not include the ProductKey level. Format: `${deviceName}/topicShortName`. ${deviceName} indicates the name of the device, and topicShortName indicates the custom name of the topic.
     *
     * >  For information about how to use the `+` or `#` wildcard in a topic, see [Topic wildcards](~~73731~~).
     * @example +/user/pm25data
     *
     * @var string
     */
    public $shortTopic;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **RUNNING**: Running
     *   **STOP**: Stopped
     *
     * @example STOP
     *
     * @var string
     */
    public $status;

    /**
     * @description The complete topic to which the rule applies. Format: `${productKey}/${deviceName}/topicShortName`.
     *
     * >  For information about how to use the `+` or `#` wildcard in a topic, see [Topic wildcards](~~73731~~).
     * @example /a1QsMlL44pp/+/user/pm25data
     *
     * @var string
     */
    public $topic;

    /**
     * @description The type of the topic. This parameter is returned if you set the SQL statement for the rule. Valid values:
     *
     *   **0**: a basic communication topic or TSL communication topic.
     *   **1**: a custom topic.
     *   **2**: a device status topic.
     *
     * If no SQL statement is set for the rule, the value **-1** is returned.
     * @example 1
     *
     * @var int
     */
    public $topicType;

    /**
     * @description The time when the rule was created. The time is displayed in UTC.
     *
     * @example 2019-02-28T06:14:33.000Z
     *
     * @var string
     */
    public $utcCreated;

    /**
     * @description The time when the rule was last modified. The time is displayed in UTC.
     *
     * @example 2019-02-28T06:20:58.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @description The **Where** query condition in the SQL statements of the rule.
     *
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
