<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListQueryRaspAppInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $raspAppName;
    /**
     * @var int
     */
    public $raspOnlineStatus;
    /**
     * @var string
     */
    public $raspStatus;
    /**
     * @var string
     */
    public $result;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'raspAppName'      => 'RaspAppName',
        'raspOnlineStatus' => 'RaspOnlineStatus',
        'raspStatus'       => 'RaspStatus',
        'result'           => 'Result',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->raspAppName) {
            $res['RaspAppName'] = $this->raspAppName;
        }

        if (null !== $this->raspOnlineStatus) {
            $res['RaspOnlineStatus'] = $this->raspOnlineStatus;
        }

        if (null !== $this->raspStatus) {
            $res['RaspStatus'] = $this->raspStatus;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['RaspAppName'])) {
            $model->raspAppName = $map['RaspAppName'];
        }

        if (isset($map['RaspOnlineStatus'])) {
            $model->raspOnlineStatus = $map['RaspOnlineStatus'];
        }

        if (isset($map['RaspStatus'])) {
            $model->raspStatus = $map['RaspStatus'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
