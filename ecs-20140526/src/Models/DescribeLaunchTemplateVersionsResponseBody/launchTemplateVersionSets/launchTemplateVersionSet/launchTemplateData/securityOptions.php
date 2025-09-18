<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;

use AlibabaCloud\Dara\Model;

class securityOptions extends Model
{
    /**
     * @var string
     */
    public $trustedSystemMode;
    protected $_name = [
        'trustedSystemMode' => 'TrustedSystemMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trustedSystemMode) {
            $res['TrustedSystemMode'] = $this->trustedSystemMode;
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
        if (isset($map['TrustedSystemMode'])) {
            $model->trustedSystemMode = $map['TrustedSystemMode'];
        }

        return $model;
    }
}
