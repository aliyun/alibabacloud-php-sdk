<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class ExportConversationDetailsRequest extends Model
{
    /**
     * @var int
     */
    public $beginTimeLeftRange;
    /**
     * @var int
     */
    public $beginTimeRightRange;
    /**
     * @var string
     */
    public $callingNumber;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string[]
     */
    public $options;
    /**
     * @var int
     */
    public $result;
    /**
     * @var int
     */
    public $roundsLeftRange;
    /**
     * @var int
     */
    public $roundsRightRange;
    protected $_name = [
        'beginTimeLeftRange'  => 'BeginTimeLeftRange',
        'beginTimeRightRange' => 'BeginTimeRightRange',
        'callingNumber'       => 'CallingNumber',
        'instanceId'          => 'InstanceId',
        'options'             => 'Options',
        'result'              => 'Result',
        'roundsLeftRange'     => 'RoundsLeftRange',
        'roundsRightRange'    => 'RoundsRightRange',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTimeLeftRange) {
            $res['BeginTimeLeftRange'] = $this->beginTimeLeftRange;
        }

        if (null !== $this->beginTimeRightRange) {
            $res['BeginTimeRightRange'] = $this->beginTimeRightRange;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1             = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->roundsLeftRange) {
            $res['RoundsLeftRange'] = $this->roundsLeftRange;
        }

        if (null !== $this->roundsRightRange) {
            $res['RoundsRightRange'] = $this->roundsRightRange;
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
        if (isset($map['BeginTimeLeftRange'])) {
            $model->beginTimeLeftRange = $map['BeginTimeLeftRange'];
        }

        if (isset($map['BeginTimeRightRange'])) {
            $model->beginTimeRightRange = $map['BeginTimeRightRange'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1             = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['RoundsLeftRange'])) {
            $model->roundsLeftRange = $map['RoundsLeftRange'];
        }

        if (isset($map['RoundsRightRange'])) {
            $model->roundsRightRange = $map['RoundsRightRange'];
        }

        return $model;
    }
}
