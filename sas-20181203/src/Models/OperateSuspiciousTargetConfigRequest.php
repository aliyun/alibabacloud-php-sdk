<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateSuspiciousTargetConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetOperations;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'lang'             => 'Lang',
        'type'             => 'Type',
        'targetType'       => 'TargetType',
        'targetOperations' => 'TargetOperations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetOperations) {
            $res['TargetOperations'] = $this->targetOperations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateSuspiciousTargetConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetOperations'])) {
            $model->targetOperations = $map['TargetOperations'];
        }

        return $model;
    }
}
