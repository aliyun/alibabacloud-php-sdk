<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentMemoryResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $hintLevel;

    /**
     * @var string
     */
    public $memFrom;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'content' => 'Content',
        'fromId' => 'FromId',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'hintLevel' => 'HintLevel',
        'memFrom' => 'MemFrom',
        'status' => 'Status',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hintLevel) {
            $res['HintLevel'] = $this->hintLevel;
        }

        if (null !== $this->memFrom) {
            $res['MemFrom'] = $this->memFrom;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HintLevel'])) {
            $model->hintLevel = $map['HintLevel'];
        }

        if (isset($map['MemFrom'])) {
            $model->memFrom = $map['MemFrom'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
