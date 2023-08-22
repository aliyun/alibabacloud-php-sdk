<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagManifestResponseBody\manifest;

use AlibabaCloud\Tea\Model;

class signatures extends Model
{
    /**
     * @description The header information of the signature.
     *
     * @example null
     *
     * @var mixed[]
     */
    public $header;

    /**
     * @description The signed protected header.
     *
     * @example null
     *
     * @var string
     */
    public $protected;

    /**
     * @description The signature for the image manifest.
     *
     * @example null
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'header'    => 'Header',
        'protected' => 'Protected',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->header) {
            $res['Header'] = $this->header;
        }
        if (null !== $this->protected) {
            $res['Protected'] = $this->protected;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Header'])) {
            $model->header = $map['Header'];
        }
        if (isset($map['Protected'])) {
            $model->protected = $map['Protected'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
