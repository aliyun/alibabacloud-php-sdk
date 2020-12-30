<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CallOnlinePrivacyNumberResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $represent;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $dateCreated;

    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'represent'   => 'Represent',
        'statusCode'  => 'StatusCode',
        'callId'      => 'CallId',
        'dateCreated' => 'DateCreated',
        'telX'        => 'TelX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->represent) {
            $res['Represent'] = $this->represent;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->dateCreated) {
            $res['DateCreated'] = $this->dateCreated;
        }
        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
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
        if (isset($map['Represent'])) {
            $model->represent = $map['Represent'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['DateCreated'])) {
            $model->dateCreated = $map['DateCreated'];
        }
        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
