<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateBaselineCheckWhiteRecordRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string[]
     */
    public $removeContainerUuids;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'checkId' => 'CheckId',
        'lang' => 'Lang',
        'reason' => 'Reason',
        'recordId' => 'RecordId',
        'removeContainerUuids' => 'RemoveContainerUuids',
        'source' => 'Source',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->removeContainerUuids)) {
            Model::validateArray($this->removeContainerUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->removeContainerUuids) {
            if (\is_array($this->removeContainerUuids)) {
                $res['RemoveContainerUuids'] = [];
                $n1 = 0;
                foreach ($this->removeContainerUuids as $item1) {
                    $res['RemoveContainerUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RemoveContainerUuids'])) {
            if (!empty($map['RemoveContainerUuids'])) {
                $model->removeContainerUuids = [];
                $n1 = 0;
                foreach ($map['RemoveContainerUuids'] as $item1) {
                    $model->removeContainerUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
