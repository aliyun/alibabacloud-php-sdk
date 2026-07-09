<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody;

use AlibabaCloud\Dara\Model;

class issuer extends Model
{
    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $organization;
    protected $_name = [
        'commonName' => 'CommonName',
        'organization' => 'Organization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }

        return $model;
    }
}
