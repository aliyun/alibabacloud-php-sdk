<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody;

use AlibabaCloud\Tea\Model;

class OIDCTokenInfo extends Model
{
    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $clientIds;
    protected $_name = [
        'subject'   => 'Subject',
        'issuer'    => 'Issuer',
        'clientIds' => 'ClientIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OIDCTokenInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }

        return $model;
    }
}
