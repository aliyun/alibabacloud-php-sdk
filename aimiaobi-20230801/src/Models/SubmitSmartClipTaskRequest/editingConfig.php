<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\titleConfig;
use AlibabaCloud\Tea\Model;

class editingConfig extends Model
{
    /**
     * @var titleConfig
     */
    public $titleConfig;
    protected $_name = [
        'titleConfig' => 'TitleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->titleConfig) {
            $res['TitleConfig'] = null !== $this->titleConfig ? $this->titleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TitleConfig'])) {
            $model->titleConfig = titleConfig::fromMap($map['TitleConfig']);
        }

        return $model;
    }
}
