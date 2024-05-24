<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ManualEventPayload extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $commitID;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var TemplateConfig
     */
    public $templateConfig;
    protected $_name = [
        'branch'         => 'branch',
        'commitID'       => 'commitID',
        'tag'            => 'tag',
        'templateConfig' => 'templateConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->commitID) {
            $res['commitID'] = $this->commitID;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->templateConfig) {
            $res['templateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManualEventPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['commitID'])) {
            $model->commitID = $map['commitID'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['templateConfig'])) {
            $model->templateConfig = TemplateConfig::fromMap($map['templateConfig']);
        }

        return $model;
    }
}
