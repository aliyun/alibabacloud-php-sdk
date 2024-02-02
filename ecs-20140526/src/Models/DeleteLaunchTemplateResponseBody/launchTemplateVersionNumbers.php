<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class launchTemplateVersionNumbers extends Model
{
    /**
     * @var int[]
     */
    public $versionNumbers;
    protected $_name = [
        'versionNumbers' => 'versionNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionNumbers) {
            $res['versionNumbers'] = $this->versionNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateVersionNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['versionNumbers'])) {
            if (!empty($map['versionNumbers'])) {
                $model->versionNumbers = $map['versionNumbers'];
            }
        }

        return $model;
    }
}
