<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class SendNapalStreamMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configurationShrink;

    /**
     * @var string
     */
    public $messageShrink;

    /**
     * @var string
     */
    public $metadataShrink;
    protected $_name = [
        'configurationShrink' => 'Configuration',
        'messageShrink' => 'Message',
        'metadataShrink' => 'Metadata',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationShrink) {
            $res['Configuration'] = $this->configurationShrink;
        }

        if (null !== $this->messageShrink) {
            $res['Message'] = $this->messageShrink;
        }

        if (null !== $this->metadataShrink) {
            $res['Metadata'] = $this->metadataShrink;
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
        if (isset($map['Configuration'])) {
            $model->configurationShrink = $map['Configuration'];
        }

        if (isset($map['Message'])) {
            $model->messageShrink = $map['Message'];
        }

        if (isset($map['Metadata'])) {
            $model->metadataShrink = $map['Metadata'];
        }

        return $model;
    }
}
