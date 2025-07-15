<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\customParams;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\liveTemplateIds;
use AlibabaCloud\Tea\Model;

class transcodeConfig extends Model
{
    /**
     * @description The transcoding template of the production studio. Valid values:
     *
     *   **lp_ld**: low definition
     *   **lp_sd**: standard definition
     *   **lp_hd**: high definition
     *   **lp_ud**: ultra high definition
     *   **lp_ld_v**: low definition (portrait mode)
     *   **lp_sd_v**: standard definition (portrait mode)
     *   **lp_hd_v**: high definition (portrait mode)
     *   **lp_ud_v**: ultra high definition (portrait mode)
     *
     * @example lp_hd
     *
     * @var string
     */
    public $casterTemplate;

    /**
     * @description The custom settings.
     *
     * @var customParams
     */
    public $customParams;

    /**
     * @description The transcoding setting for live streams.
     *
     * @var liveTemplateIds
     */
    public $liveTemplateIds;
    protected $_name = [
        'casterTemplate' => 'CasterTemplate',
        'customParams' => 'CustomParams',
        'liveTemplateIds' => 'LiveTemplateIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }
        if (null !== $this->customParams) {
            $res['CustomParams'] = null !== $this->customParams ? $this->customParams->toMap() : null;
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
        if (isset($map['CustomParams'])) {
            $model->customParams = customParams::fromMap($map['CustomParams']);
        }
        if (isset($map['LiveTemplateIds'])) {
            $model->liveTemplateIds = liveTemplateIds::fromMap($map['LiveTemplateIds']);
        }

        return $model;
    }
}
