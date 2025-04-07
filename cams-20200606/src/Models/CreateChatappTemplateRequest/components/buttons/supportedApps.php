<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons;

use AlibabaCloud\Tea\Model;

class supportedApps extends Model
{
    /**
     * @description The name of the Android application package. This parameter is required if you create an Android application.
     *
     * @example com.kuaidian.waimaistaff
     *
     * @var string
     */
    public $packageName;

    /**
     * @description WhatsApp template is required when Category is Authoritative and Button Type is ONE_TAP/ZERO-TAP, indicating the signature hash value of the WhatsApp application.
     *
     * @example ieid83kdiek
     *
     * @var string
     */
    public $signatureHash;
    protected $_name = [
        'packageName' => 'PackageName',
        'signatureHash' => 'SignatureHash',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return supportedApps
     */
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
