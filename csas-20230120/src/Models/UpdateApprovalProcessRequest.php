<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemaConfigs;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateApprovalProcessRequest\matchSchemas;

class UpdateApprovalProcessRequest extends Model
{
    /**
     * @var int
     */
    public $approvalType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventLabel;

    /**
     * @var string
     */
    public $externalConfig;

    /**
     * @var matchSchemaConfigs
     */
    public $matchSchemaConfigs;

    /**
     * @var matchSchemas
     */
    public $matchSchemas;

    /**
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
        'approvalType' => 'ApprovalType',
        'description' => 'Description',
        'eventLabel' => 'EventLabel',
        'externalConfig' => 'ExternalConfig',
        'matchSchemaConfigs' => 'MatchSchemaConfigs',
        'matchSchemas' => 'MatchSchemas',
        'processId' => 'ProcessId',
        'processName' => 'ProcessName',
        'processNodes' => 'ProcessNodes',
    ];

    public function validate()
    {
        if (null !== $this->matchSchemaConfigs) {
            $this->matchSchemaConfigs->validate();
        }
        if (null !== $this->matchSchemas) {
            $this->matchSchemas->validate();
        }
        if (\is_array($this->processNodes)) {
            Model::validateArray($this->processNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
        }

        if (null !== $this->externalConfig) {
            $res['ExternalConfig'] = $this->externalConfig;
        }

        if (null !== $this->matchSchemaConfigs) {
            $res['MatchSchemaConfigs'] = null !== $this->matchSchemaConfigs ? $this->matchSchemaConfigs->toArray($noStream) : $this->matchSchemaConfigs;
        }

        if (null !== $this->matchSchemas) {
            $res['MatchSchemas'] = null !== $this->matchSchemas ? $this->matchSchemas->toArray($noStream) : $this->matchSchemas;
        }

        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processNodes) {
            if (\is_array($this->processNodes)) {
                $res['ProcessNodes'] = [];
                $n1 = 0;
                foreach ($this->processNodes as $item1) {
                    if (\is_array($item1)) {
                        $res['ProcessNodes'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['ProcessNodes'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
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
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }

        if (isset($map['ExternalConfig'])) {
            $model->externalConfig = $map['ExternalConfig'];
        }

        if (isset($map['MatchSchemaConfigs'])) {
            $model->matchSchemaConfigs = matchSchemaConfigs::fromMap($map['MatchSchemaConfigs']);
        }

        if (isset($map['MatchSchemas'])) {
            $model->matchSchemas = matchSchemas::fromMap($map['MatchSchemas']);
        }

        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessNodes'])) {
            if (!empty($map['ProcessNodes'])) {
                $model->processNodes = [];
                $n1 = 0;
                foreach ($map['ProcessNodes'] as $item1) {
                    if (!empty($item1)) {
                        $model->processNodes[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->processNodes[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
