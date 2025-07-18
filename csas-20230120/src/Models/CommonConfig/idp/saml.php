<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp;

use AlibabaCloud\Tea\Model;

class saml extends Model
{
    /**
     * @var string
     */
    public $acs;

    /**
     * @var string
     */
    public $metadata;
    protected $_name = [
        'acs' => 'Acs',
        'metadata' => 'Metadata',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acs) {
            $res['Acs'] = $this->acs;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saml
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acs'])) {
            $model->acs = $map['Acs'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
