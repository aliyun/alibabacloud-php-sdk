<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetProviderDocumentRequest extends Model
{
    /**
     * @var string
     */
    public $providerVersion;

    /**
     * @var string
     */
    public $terraformResourceType;
    protected $_name = [
        'providerVersion' => 'providerVersion',
        'terraformResourceType' => 'terraformResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->providerVersion) {
            $res['providerVersion'] = $this->providerVersion;
        }

        if (null !== $this->terraformResourceType) {
            $res['terraformResourceType'] = $this->terraformResourceType;
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
        if (isset($map['providerVersion'])) {
            $model->providerVersion = $map['providerVersion'];
        }

        if (isset($map['terraformResourceType'])) {
            $model->terraformResourceType = $map['terraformResourceType'];
        }

        return $model;
    }
}
