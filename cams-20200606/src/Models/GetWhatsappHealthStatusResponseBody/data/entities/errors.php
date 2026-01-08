<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities;

use AlibabaCloud\Dara\Model;

class errors extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorDescription;

    /**
     * @var string
     */
    public $possibleSolution;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorDescription' => 'ErrorDescription',
        'possibleSolution' => 'PossibleSolution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorDescription) {
            $res['ErrorDescription'] = $this->errorDescription;
        }

        if (null !== $this->possibleSolution) {
            $res['PossibleSolution'] = $this->possibleSolution;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorDescription'])) {
            $model->errorDescription = $map['ErrorDescription'];
        }

        if (isset($map['PossibleSolution'])) {
            $model->possibleSolution = $map['PossibleSolution'];
        }

        return $model;
    }
}
