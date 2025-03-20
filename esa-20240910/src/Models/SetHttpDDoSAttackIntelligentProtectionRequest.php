<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class SetHttpDDoSAttackIntelligentProtectionRequest extends Model
{
    /**
     * @description The mode of smart HTTP DDoS protection. Valid values:
     *
     *   **observe**: alert.
     *   **defense**: block.
     *
     * This parameter is required.
     *
     * @example defense
     *
     * @var string
     */
    public $aiMode;

    /**
     * @description The level of smart HTTP DDoS protection. Valid values:
     *
     *   **level0**: very loose.
     *   **level30**: loose.
     *   **level60**: normal.
     *   **level90**: strict.
     *
     * This parameter is required.
     *
     * @example level60
     *
     * @var string
     */
    public $aiTemplate;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'aiMode' => 'AiMode',
        'aiTemplate' => 'AiTemplate',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiMode) {
            $res['AiMode'] = $this->aiMode;
        }
        if (null !== $this->aiTemplate) {
            $res['AiTemplate'] = $this->aiTemplate;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetHttpDDoSAttackIntelligentProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiMode'])) {
            $model->aiMode = $map['AiMode'];
        }
        if (isset($map['AiTemplate'])) {
            $model->aiTemplate = $map['AiTemplate'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
