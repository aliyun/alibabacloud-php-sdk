<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateKBSyncLinkRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $syncIntervalMinutes;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'linkId' => 'LinkId',
        'regionId' => 'RegionId',
        'syncIntervalMinutes' => 'SyncIntervalMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->syncIntervalMinutes) {
            $res['SyncIntervalMinutes'] = $this->syncIntervalMinutes;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SyncIntervalMinutes'])) {
            $model->syncIntervalMinutes = $map['SyncIntervalMinutes'];
        }

        return $model;
    }
}
