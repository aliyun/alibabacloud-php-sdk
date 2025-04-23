<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateDNSSLBWeightRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'lang' => 'Lang',
        'recordId' => 'RecordId',
        'userClientIp' => 'UserClientIp',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
