<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialPoolStatisticsRequest extends Model
{
    /**
     * @example CM-SF-M-2-12G
     *
     * @var string
     */
    public $credentialNO;

    /**
     * @example 202108
     *
     * @var string
     */
    public $date;
    protected $_name = [
        'credentialNO' => 'CredentialNO',
        'date'         => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialNO) {
            $res['CredentialNO'] = $this->credentialNO;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialPoolStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialNO'])) {
            $model->credentialNO = $map['CredentialNO'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
