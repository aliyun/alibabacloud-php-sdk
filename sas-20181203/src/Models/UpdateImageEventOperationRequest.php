<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageEventOperationRequest extends Model
{
    /**
     * @description The rule conditions. Specify a value in the JSON format. You can specify the following keys:
     *
     *   **condition**: the matching condition.
     *   **type**: the matching type.
     *   **value**: the matching value.
     *
     * @example [{\\"condition\\": \\"MD5\\", \\"type\\": \\"equals\\", \\"value\\": \\"0083a31cc0083a31ccf7c10367a6e****\\"}]
     *
     * @var string
     */
    public $conditions;

    /**
     * @description The ID of the alert handling rule.
     * > You can call the [DescribeImageEventOperationPage](~~DescribeImageEventOperationPage~~) operation to query the ID.
     * @example 814163
     *
     * @var int
     */
    public $id;

    /**
     * @description The remarks that you want to add.
     *
     * @example test
     *
     * @var string
     */
    public $note;

    /**
     * @description The application scope of the rule. The value is in the JSON format. Valid values:
     *
     *   **type**
     *   **value**
     *
     * @example {\\"type\\": \\"repo\\", \\"value\\": \\"test-aaa/shenzhen-repo-01\\"}
     *
     * @var string
     */
    public $scenarios;

    /**
     * @description The source of the whitelist. Valid values:
     *
     *   **image**: image.
     *   **agentless**: agentless detection.
     *
     * @example agentless
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'conditions' => 'Conditions',
        'id'         => 'Id',
        'note'       => 'Note',
        'scenarios'  => 'Scenarios',
        'source'     => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->scenarios) {
            $res['Scenarios'] = $this->scenarios;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageEventOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Scenarios'])) {
            $model->scenarios = $map['Scenarios'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
