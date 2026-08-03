<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataAgentMemoryRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $memFrom;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'content' => 'Content',
        'DMSUnit' => 'DMSUnit',
        'fromId' => 'FromId',
        'memFrom' => 'MemFrom',
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

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }

        if (null !== $this->memFrom) {
            $res['MemFrom'] = $this->memFrom;
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

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }

        if (isset($map['MemFrom'])) {
            $model->memFrom = $map['MemFrom'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
