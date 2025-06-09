<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsParamsResponseBody;

use AlibabaCloud\Dara\Model;

class configList extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $curValue;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $translation;
    protected $_name = [
        'comment' => 'Comment',
        'configName' => 'ConfigName',
        'curValue' => 'CurValue',
        'defaultValue' => 'DefaultValue',
        'translation' => 'Translation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->curValue) {
            $res['CurValue'] = $this->curValue;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->translation) {
            $res['Translation'] = $this->translation;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['CurValue'])) {
            $model->curValue = $map['CurValue'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Translation'])) {
            $model->translation = $map['Translation'];
        }

        return $model;
    }
}
