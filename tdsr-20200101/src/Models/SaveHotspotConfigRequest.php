<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SaveHotspotConfigRequest extends Model
{
    /**
     * @var string
     */
    public $paramTag;

    /**
     * @var string
     */
    public $previewToken;
    protected $_name = [
        'paramTag'     => 'ParamTag',
        'previewToken' => 'PreviewToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramTag) {
            $res['ParamTag'] = $this->paramTag;
        }
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveHotspotConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamTag'])) {
            $model->paramTag = $map['ParamTag'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }

        return $model;
    }
}
