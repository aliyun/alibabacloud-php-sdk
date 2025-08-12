<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Dara\Model;

class pushingSetting extends Model
{
    /**
     * @var string
     */
    public $pushingDataFormat;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string[]
     */
    public $targetUuids;

    /**
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'pushingDataFormat' => 'PushingDataFormat',
        'range' => 'Range',
        'targetUuids' => 'TargetUuids',
        'templateUuid' => 'TemplateUuid',
    ];

    public function validate()
    {
        if (\is_array($this->targetUuids)) {
            Model::validateArray($this->targetUuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushingDataFormat) {
            $res['PushingDataFormat'] = $this->pushingDataFormat;
        }

        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }

        if (null !== $this->targetUuids) {
            if (\is_array($this->targetUuids)) {
                $res['TargetUuids'] = [];
                $n1 = 0;
                foreach ($this->targetUuids as $item1) {
                    $res['TargetUuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
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
        if (isset($map['PushingDataFormat'])) {
            $model->pushingDataFormat = $map['PushingDataFormat'];
        }

        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }

        if (isset($map['TargetUuids'])) {
            if (!empty($map['TargetUuids'])) {
                $model->targetUuids = [];
                $n1 = 0;
                foreach ($map['TargetUuids'] as $item1) {
                    $model->targetUuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }

        return $model;
    }
}
