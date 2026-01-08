<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons;

use AlibabaCloud\Dara\Model;

class supportedApps extends Model
{
    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $signatureHash;
    protected $_name = [
        'packageName' => 'PackageName',
        'signatureHash' => 'SignatureHash',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->signatureHash) {
            $res['SignatureHash'] = $this->signatureHash;
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
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['SignatureHash'])) {
            $model->signatureHash = $map['SignatureHash'];
        }

        return $model;
    }
}
