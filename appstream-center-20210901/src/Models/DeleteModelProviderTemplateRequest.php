<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteModelProviderTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $providerTemplateId;
    protected $_name = [
        'providerTemplateId' => 'ProviderTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
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
        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        return $model;
    }
}
