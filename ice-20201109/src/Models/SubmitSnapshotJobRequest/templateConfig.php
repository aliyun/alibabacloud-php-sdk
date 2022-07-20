<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig\overwriteParams;
use AlibabaCloud\Tea\Model;

class templateConfig extends Model
{
    /**
     * @var overwriteParams
     */
    public $overwriteParams;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'overwriteParams' => 'OverwriteParams',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwriteParams) {
            $res['OverwriteParams'] = null !== $this->overwriteParams ? $this->overwriteParams->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverwriteParams'])) {
            $model->overwriteParams = overwriteParams::fromMap($map['OverwriteParams']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
