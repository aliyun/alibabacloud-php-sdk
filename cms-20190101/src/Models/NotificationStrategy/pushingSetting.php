<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Tea\Model;

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
        'range'             => 'Range',
        'targetUuids'       => 'TargetUuids',
        'templateUuid'      => 'TemplateUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushingDataFormat) {
            $res['PushingDataFormat'] = $this->pushingDataFormat;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }
        if (null !== $this->targetUuids) {
            $res['TargetUuids'] = $this->targetUuids;
        }
        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushingSetting
     */
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
                $model->targetUuids = $map['TargetUuids'];
            }
        }
        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }

        return $model;
    }
}
