<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecognizeIntentionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisProcess;
    /**
     * @var string
     */
    public $intentionCode;
    /**
     * @var string
     */
    public $intentionName;
    /**
     * @var string
     */
    public $intentionScript;
    /**
     * @var string
     */
    public $recommendIntention;
    /**
     * @var string
     */
    public $recommendScript;
    protected $_name = [
        'analysisProcess'    => 'analysisProcess',
        'intentionCode'      => 'intentionCode',
        'intentionName'      => 'intentionName',
        'intentionScript'    => 'intentionScript',
        'recommendIntention' => 'recommendIntention',
        'recommendScript'    => 'recommendScript',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisProcess) {
            $res['analysisProcess'] = $this->analysisProcess;
        }

        if (null !== $this->intentionCode) {
            $res['intentionCode'] = $this->intentionCode;
        }

        if (null !== $this->intentionName) {
            $res['intentionName'] = $this->intentionName;
        }

        if (null !== $this->intentionScript) {
            $res['intentionScript'] = $this->intentionScript;
        }

        if (null !== $this->recommendIntention) {
            $res['recommendIntention'] = $this->recommendIntention;
        }

        if (null !== $this->recommendScript) {
            $res['recommendScript'] = $this->recommendScript;
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
        if (isset($map['analysisProcess'])) {
            $model->analysisProcess = $map['analysisProcess'];
        }

        if (isset($map['intentionCode'])) {
            $model->intentionCode = $map['intentionCode'];
        }

        if (isset($map['intentionName'])) {
            $model->intentionName = $map['intentionName'];
        }

        if (isset($map['intentionScript'])) {
            $model->intentionScript = $map['intentionScript'];
        }

        if (isset($map['recommendIntention'])) {
            $model->recommendIntention = $map['recommendIntention'];
        }

        if (isset($map['recommendScript'])) {
            $model->recommendScript = $map['recommendScript'];
        }

        return $model;
    }
}
