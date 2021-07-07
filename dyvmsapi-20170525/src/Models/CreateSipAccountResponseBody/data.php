<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateSipAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sipAccountID;

    /**
     * @var string
     */
    public $voipName;

    /**
     * @var string
     */
    public $voipPassword;
    protected $_name = [
        'sipAccountID' => 'SipAccountID',
        'voipName'     => 'VoipName',
        'voipPassword' => 'VoipPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sipAccountID) {
            $res['SipAccountID'] = $this->sipAccountID;
        }
        if (null !== $this->voipName) {
            $res['VoipName'] = $this->voipName;
        }
        if (null !== $this->voipPassword) {
            $res['VoipPassword'] = $this->voipPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SipAccountID'])) {
            $model->sipAccountID = $map['SipAccountID'];
        }
        if (isset($map['VoipName'])) {
            $model->voipName = $map['VoipName'];
        }
        if (isset($map['VoipPassword'])) {
            $model->voipPassword = $map['VoipPassword'];
        }

        return $model;
    }
}
