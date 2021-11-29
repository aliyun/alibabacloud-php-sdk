<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeFCTriggerResponseBody;

use AlibabaCloud\Tea\Model;

class FCTrigger extends Model
{
    /**
     * @var string
     */
    public $eventMetaName;

    /**
     * @var string
     */
    public $eventMetaVersion;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $sourceArn;

    /**
     * @var string
     */
    public $triggerARN;
    protected $_name = [
        'eventMetaName'    => 'EventMetaName',
        'eventMetaVersion' => 'EventMetaVersion',
        'notes'            => 'Notes',
        'roleARN'          => 'RoleARN',
        'sourceArn'        => 'SourceArn',
        'triggerARN'       => 'TriggerARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventMetaName) {
            $res['EventMetaName'] = $this->eventMetaName;
        }
        if (null !== $this->eventMetaVersion) {
            $res['EventMetaVersion'] = $this->eventMetaVersion;
        }
        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->sourceArn) {
            $res['SourceArn'] = $this->sourceArn;
        }
        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FCTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventMetaName'])) {
            $model->eventMetaName = $map['EventMetaName'];
        }
        if (isset($map['EventMetaVersion'])) {
            $model->eventMetaVersion = $map['EventMetaVersion'];
        }
        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['SourceArn'])) {
            $model->sourceArn = $map['SourceArn'];
        }
        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }

        return $model;
    }
}
