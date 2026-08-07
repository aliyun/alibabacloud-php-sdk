<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListFlashSmsProvidersResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $profileSchema;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'profileSchema' => 'ProfileSchema',
        'providerId' => 'ProviderId',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->profileSchema) {
            $res['ProfileSchema'] = $this->profileSchema;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
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
        if (isset($map['ProfileSchema'])) {
            $model->profileSchema = $map['ProfileSchema'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
