<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateApprovalProcessShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $matchSchemasShrink;

    /**
     * @description This parameter is required.
     *
     * @example test_process
     *
     * @var string
     */
    public $processName;

    /**
     * @description This parameter is required.
     *
     * @var string[][]
     */
    public $processNodes;
    protected $_name = [
        'description' => 'Description',
        'matchSchemasShrink' => 'MatchSchemas',
        'processName' => 'ProcessName',
        'processNodes' => 'ProcessNodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->matchSchemasShrink) {
            $res['MatchSchemas'] = $this->matchSchemasShrink;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processNodes) {
            $res['ProcessNodes'] = $this->processNodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApprovalProcessShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MatchSchemas'])) {
            $model->matchSchemasShrink = $map['MatchSchemas'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessNodes'])) {
            if (!empty($map['ProcessNodes'])) {
                $model->processNodes = $map['ProcessNodes'];
            }
        }

        return $model;
    }
}
