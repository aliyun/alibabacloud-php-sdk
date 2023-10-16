<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ExportConversationDetailsRequest extends Model
{
    /**
     * @example 1582266750353
     *
     * @var int
     */
    public $beginTimeLeftRange;

    /**
     * @example 1640793599000
     *
     * @var int
     */
    public $beginTimeRightRange;

    /**
     * @example 13581588**
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example 6c01a99f-1b72-4f75-a8bd-3875766bd19d
     *
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
    }

    public function toMap()
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
            $res['Options'] = $this->options;
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

    /**
     * @param array $map
     *
     * @return ExportConversationDetailsRequest
     */
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
                $model->options = $map['Options'];
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
