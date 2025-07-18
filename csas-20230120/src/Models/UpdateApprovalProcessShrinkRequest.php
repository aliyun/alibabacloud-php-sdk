<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateApprovalProcessShrinkRequest extends Model
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
     * @example approval-process-f16bf74b2b29****
     *
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string[][]
     */
    public $processNodes;
    protected $_name = [
        'description' => 'Description',
        'matchSchemasShrink' => 'MatchSchemas',
        'processId' => 'ProcessId',
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
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
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
     * @return UpdateApprovalProcessShrinkRequest
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
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
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
