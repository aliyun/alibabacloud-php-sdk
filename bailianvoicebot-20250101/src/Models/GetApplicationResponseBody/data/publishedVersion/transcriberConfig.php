<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\GetApplicationResponseBody\data\publishedVersion;

use AlibabaCloud\Dara\Model;

class transcriberConfig extends Model
{
    /**
     * @var string
     */
    public $nlsAccessType;

    /**
     * @var string
     */
    public $nlsEngine;
    protected $_name = [
        'nlsAccessType' => 'NlsAccessType',
        'nlsEngine' => 'NlsEngine',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nlsAccessType) {
            $res['NlsAccessType'] = $this->nlsAccessType;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
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
        if (isset($map['NlsAccessType'])) {
            $model->nlsAccessType = $map['NlsAccessType'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        return $model;
    }
}
