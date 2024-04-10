<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactBuildRuleResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var bool
     */
    public $imageIndexOnly;
    protected $_name = [
        'imageIndexOnly' => 'ImageIndexOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageIndexOnly) {
            $res['ImageIndexOnly'] = $this->imageIndexOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageIndexOnly'])) {
            $model->imageIndexOnly = $map['ImageIndexOnly'];
        }

        return $model;
    }
}
