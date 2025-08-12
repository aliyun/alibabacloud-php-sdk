<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\customParams;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\liveTemplateIds;

class transcodeConfig extends Model
{
    /**
     * @var string
     */
    public $casterTemplate;

    /**
     * @var customParams
     */
    public $customParams;

    /**
     * @var liveTemplateIds
     */
    public $liveTemplateIds;
    protected $_name = [
        'casterTemplate' => 'CasterTemplate',
        'customParams' => 'CustomParams',
        'liveTemplateIds' => 'LiveTemplateIds',
    ];

    public function validate()
    {
        if (null !== $this->customParams) {
            $this->customParams->validate();
        }
        if (null !== $this->liveTemplateIds) {
            $this->liveTemplateIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }

        if (null !== $this->customParams) {
            $res['CustomParams'] = null !== $this->customParams ? $this->customParams->toArray($noStream) : $this->customParams;
        }

        if (null !== $this->liveTemplateIds) {
            $res['LiveTemplateIds'] = null !== $this->liveTemplateIds ? $this->liveTemplateIds->toArray($noStream) : $this->liveTemplateIds;
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
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }

        if (isset($map['CustomParams'])) {
            $model->customParams = customParams::fromMap($map['CustomParams']);
        }

        if (isset($map['LiveTemplateIds'])) {
            $model->liveTemplateIds = liveTemplateIds::fromMap($map['LiveTemplateIds']);
        }

        return $model;
    }
}
