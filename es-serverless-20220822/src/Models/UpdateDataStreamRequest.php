<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models;

use AlibabaCloud\SDK\Esserverless\V20220822\Models\UpdateDataStreamRequest\template;
use AlibabaCloud\Tea\Model;

class UpdateDataStreamRequest extends Model
{
    /**
     * @description 删除时间
     *
     * @example 150d
     *
     * @var string
     */
    public $deletePhase;

    /**
     * @example false
     *
     * @var string
     */
    public $dynamic;

    /**
     * @var template
     */
    public $template;

    /**
     * @example @timestamp
     *
     * @var string
     */
    public $timeStampKey;
    protected $_name = [
        'deletePhase'  => 'deletePhase',
        'dynamic'      => 'dynamic',
        'template'     => 'template',
        'timeStampKey' => 'timeStampKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletePhase) {
            $res['deletePhase'] = $this->deletePhase;
        }
        if (null !== $this->dynamic) {
            $res['dynamic'] = $this->dynamic;
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->timeStampKey) {
            $res['timeStampKey'] = $this->timeStampKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deletePhase'])) {
            $model->deletePhase = $map['deletePhase'];
        }
        if (isset($map['dynamic'])) {
            $model->dynamic = $map['dynamic'];
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }
        if (isset($map['timeStampKey'])) {
            $model->timeStampKey = $map['timeStampKey'];
        }

        return $model;
    }
}
