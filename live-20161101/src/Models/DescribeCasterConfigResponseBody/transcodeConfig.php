<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\liveTemplateIds;
use AlibabaCloud\Tea\Model;

class transcodeConfig extends Model
{
    /**
     * @var string
     */
    public $casterTemplate;

    /**
     * @var liveTemplateIds
     */
    public $liveTemplateIds;
    protected $_name = [
        'casterTemplate'  => 'CasterTemplate',
        'liveTemplateIds' => 'LiveTemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }
        if (null !== $this->liveTemplateIds) {
            $res['LiveTemplateIds'] = null !== $this->liveTemplateIds ? $this->liveTemplateIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }
        if (isset($map['LiveTemplateIds'])) {
            $model->liveTemplateIds = liveTemplateIds::fromMap($map['LiveTemplateIds']);
        }

        return $model;
    }
}
