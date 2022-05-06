<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateNotifyRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $level;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $notifyElement;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $templateName;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'idempotentId'  => 'IdempotentId',
        'level'         => 'Level',
        'notifyElement' => 'NotifyElement',
        'templateName'  => 'TemplateName',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->notifyElement) {
            $res['NotifyElement'] = $this->notifyElement;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNotifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['NotifyElement'])) {
            $model->notifyElement = $map['NotifyElement'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
